<?php

namespace App\Livewire\BasicData\Customers;

use App\Models\City;
use App\Models\Customer;
use App\Models\CustomerType;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditCustomer extends Component
{
    public $customerTypes;
    public $cities;
    public $selectedType;
    public $selectedCustomerType;
    public $selectedCity;
    public $customer_name;
    public $embg;
    public $embs;
    public $id_number;
    public $address;
    public $phone;
    public $discount;
    public $note;
    public $city_id;
    public $customer;

    protected $rules = [
        'selectedCustomerType' => 'required',
        // Add other common validation rules
    ];

    public function mount(Customer $customer)
    {
        $this->customerTypes = CustomerType::all();
        $this->cities = City::all();

        $this->selectedCustomerType = $customer->customer_type_id;
        $this->selectedCity = $customer->city_id;
        $this->embg = $customer->embg;
        $this->embs = $customer->embs;
        $this->id_number = $customer->id_number;
        $this->customer_name = $customer->customer_name;
        $this->address = $customer->address;
        $this->phone = $customer->phone;
        $this->discount = $customer->discount;
        $this->note = $customer->note;
    }

    public function render()
    {
        return view('livewire.basic-data.customers.edit-customer');
    }


    public function updatedSelectedCustomerType($customerType)
    {
        $this->selectedType = $customerType;
        $this->validateOnly('selectedCustomerType');
    }


    public function updateCustomer()
    {

        if (empty($this->discount)) {
            $this->discount = '0.00';
        }

        $validator = Validator::make(
            $this->only([
                'selectedCustomerType', 'selectedCity', 'customer_name', 'embg', 'embs', 'id_number',
                'address', 'phone', 'discount', 'note'
            ]),
            [
                'selectedCustomerType' => 'required',
                'selectedCity' => 'required',
                'customer_name' => 'required|min:3',
                'address' => 'required',
                'phone' => 'required|min:9',
                'discount' => ['numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
                'note' => '',
                'embg' => $this->selectedCustomerType == 1 ? 'required|regex:/^\d{13}$/|numeric' : '',
                'id_number' => $this->selectedCustomerType == 1 ? 'required|min:5' : '',
                'embs' => $this->selectedCustomerType != 1 ? 'required|regex:/^\d{7}$/|numeric' : '',
            ],
            $this->customMessages()
        );

        $validator->validate();

        $this->customer->update([
            'local_department_id' => auth()->user()->local_department_id,
            'customer_type_id' => $this->selectedCustomerType,
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

        session()->flash('success', 'Сопственикот е успешно ажуриран!');
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
            'embs.required' => 'ЕМБС е задолжителен.',
            'embs.regex' => 'ЕМБС треба да има точно 7 карактери.',
            'embs.numeric' => 'ЕМБС треба да содржи само цифри.',
            'id_number.required' => 'Бројот на Лична Карта е задолжителен.',
            'id_number.min' => 'Бројот на Лична Карта бројот треба да има најмалку 5 карактери.',
        ];
    }
}
