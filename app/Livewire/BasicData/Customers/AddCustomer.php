<?php

namespace App\Livewire\BasicData\Customers;

use App\Models\City;
use App\Models\Customer;
use App\Models\CustomerType;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;


class AddCustomer extends Component
{
    public $customerTypes = '';
    public $cities = '';

    public $selectedType;
    public $selectedCustomerType = null;
    public $selectedCity = '';
    public $customer_name = '';
    public $embg = null;
    public $embs = null;
    public $id_number = null;
    public $address = '';
    public $phone = '';
    public $discount = '';
    public $note = '';



    protected $rules = [
        'selectedCustomerType' => 'required',
        // Add other common validation rules
    ];


    public function mount()
    {
        $this->customerTypes = CustomerType::all();
        $this->cities = City::all();
    }


    public function render()
    {
        return view('livewire.basic-data.customers.add-customer');
    }

    public function updatedSelectedCustomerType($customerType)
    {
        // dd($customerType);
        $this->selectedType = $customerType;
        // $this->selectedType = null;
        $this->validateOnly('selectedCustomerType');

        if ($this->selectedType == 1) {
            $this->rules['embg'] = 'required|min:5'; // Define rules for the field based on condition
            $this->rules['id_number'] = 'required|min:5';
            unset($this->rules['embs']); // Remove rules for other fields if not needed
        } else {
            $this->rules['embs'] = 'required|min:5'; // Define rules for the other field based on condition
            unset($this->rules['embg']); // Remove rules for other fields if not needed
            unset($this->rules['id_number']);
        }
    }

    public function addCustomer()
    {

        $validator = Validator::make(
            [
                'customer_type_id' => $this->selectedType,
                'city_id' => $this->selectedCity ,
                'customer_name' => $this->customer_name,
                'address' => $this->address ,
                'phone' => $this->phone ,
                'discount' => $this->discount ,
                'note' => $this->note,
            ],
            [
                'customer_type_id' => 'required',
                'city_id' => 'required',
                'customer_name' => 'required|min:3',
                'address' => 'required',
                'phone' => 'required|min:9',
                'discount' => ['numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
                'note' => '',
            ],
            $this->customMessages()
        );
        $validator->validate();



        Customer::create([
            'local_department_id' => auth()->user()->local_department_id,
            'customer_type_id' => $this->selectedType,
            'city_id' => $this->selectedCity,
            'embg' => $this->embg ,
            'embs' => $this->embs ,
            'id_number' => $this->id_number ,
            'customer_name' => $this->customer_name,
            'address' => $this->address ,
            'phone' => $this->phone ,
            'discount' => $this->discount ,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Сопственикот е успешно додаден!');
        return redirect(route('customers.all'));

        $this->reset();
    }


    public function customMessages()
    {
        return [
            'customer_type_id.required' => 'Типот на сопственик е задолжителен.',
            'city_id.required' => 'Градот е задолжителен.',
            'customer_name.required' => 'Името на сопственикот е задолжително.',
            'customer_name.min' => 'Името на сопственикот не може да биде помалку од 3 карактери.',
            'address.required' => 'Адресата е задолжителна.',
            'phone.required' => 'Телефонот е задолжителен.',
            'phone.min' => 'Телефонот треба да има најмалку 9 цифри.',
            'discount.numeric' => 'Попустот мора да биде нумеричка вредност.',
            'discount.regex' => 'Попустот може да содржи само цифри и децимали.',
        ];
    }
}
