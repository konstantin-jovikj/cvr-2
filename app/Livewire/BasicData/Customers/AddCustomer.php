<?php

namespace App\Livewire\BasicData\Customers;

use App\Models\City;
use Livewire\Component;
use App\Models\Customer;
use App\Models\CustomerType;
use Illuminate\Validation\Rule;
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
        $this->validateOnly('selectedCustomerType');
    }

    public function addCustomer()
    {

        if (empty($this->discount)) {
            $this->discount = '0.00';
        }

        $rules = [
            'customer_type_id' => 'required',
            'city_id' => 'required',
            'customer_name' => 'required|min:3',
            'address' => 'required',
            'phone' => 'required|min:9',
            'discount' => ['numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'note' => '',
        ];


        if ($this->selectedType == 1) {
            // $rules['embg'] = 'required|regex:/^\d{13}$/|numeric';
            $rules['embg'] = [
                'required',
                'regex:/^\d{13}$/',
                'numeric',
                Rule::unique('customers', 'embg')->whereNotNull('embg')
            ];
            $rules['id_number'] = [
                'required',
                'min:5',
                Rule::unique('customers', 'id_number')->whereNotNull('id_number')
            ];
            unset($rules['embs']);
        } else {
            $rules['embs'] = [
                'required',
                'regex:/^\d{7}$/',
                'numeric',
                Rule::unique('customers', 'embs')->whereNotNull('embs')
            ];
            unset($rules['embg']);
            unset($rules['id_number']);
        }

        $validator = Validator::make(
            [
                'customer_type_id' => $this->selectedType,
                'city_id' => $this->selectedCity,
                'customer_name' => $this->customer_name,
                'address' => $this->address,
                'phone' => $this->phone,
                'discount' => $this->discount,
                'note' => $this->note,
                'embg' => $this->embg,
                'embs' => $this->embs,
                'id_number' => $this->id_number,
            ],
            $rules,
            $this->customMessages()
        );

        $validator->validate();
        // If validation passes, create the Customer
        Customer::create([
            'local_department_id' => auth()->user()->local_department_id,
            'customer_type_id' => $this->selectedType,
            'city_id' => $this->selectedCity,
            'embg' => $this->embg,
            'embs' => $this->embs,
            'id_number' => $this->id_number,
            'customer_name' => $this->customer_name,
            'address' => $this->address,
            'phone' => $this->phone,
            'discount' => $this->discount,
            'note' => $this->note,
        ]);

        session()->flash('success', 'Сопственикот е успешно додаден!');
        $this->reset();
        return redirect(route('customers.all'));
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
            'embg.required' => 'ЕМБГ е задолжителен.',
            'embg.numeric' => 'ЕМБГ треба да содржи само цифри.',
            'embg.regex' => 'ЕМБГ треба да има точно 13 карактери.',
            'embg.unique' => 'ЕМБГ веќе постои.',
            'embs.required' => 'ЕМБС е задолжителен.',
            'embs.regex' => 'ЕМБС треба да има точно 7 карактери.',
            'embs.numeric' => 'ЕМБС треба да содржи само цифри.',
            'embs.unique' => 'ЕМБС веќе постои.',
            'id_number.required' => 'Бројот на Лична Карта е задолжителен.',
            'id_number.min' => 'Бројот на Лична Карта треба да има најмалку 5 карактери.',
            'id_number.unique' => 'Бројот на Лична Карта веќе постои.',
        ];
    }
}
