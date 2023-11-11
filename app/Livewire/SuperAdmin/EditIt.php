<?php

namespace App\Livewire\SuperAdmin;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

use App\Models\LocalDepartment;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;

class EditIt extends Component
{

    public $countries = null;
    public $cities = null;
    public $localDepartments;
    public $localDepartment;

    public $id;

    public $departmentId = '';
    public $cityId = '';

    public $itName = '';
    public $certNo = '';
    public $localDepartmentPrefix = '';
    public $localDepartmentAddress = '';

    public $phone = '';
    public $email = '';
    public $locDepDesc = '';
    public $startDate = '';


    public $endDate = '';

    public $country = null;






    public function mount(LocalDepartment $localDepartment)
    {
        // dd($localDepartment);
        $this->itName = $localDepartment->local_department_name;
        $this->certNo = $localDepartment->cert_no;
        $this->localDepartmentPrefix = $localDepartment->local_department_prefix;
        $this->email = $localDepartment->email;
        $this->phone = $localDepartment->phone;
        $this->localDepartmentAddress = $localDepartment->department_address;
        $this->country = $localDepartment->city->country_id;
        $this->cityId = $localDepartment->city_id;
        $this->startDate = $localDepartment->start_date;
        $this->endDate = $localDepartment->end_date;
        $this->locDepDesc = $localDepartment->loc_dep_dsc;

        $this->countries = Country::all();
        $this->cities = City::where('country_id', $this->country)->get();
    }



    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.edit-it');
    }


    public function updatedCountry($country)
    {
        $this->cities = City::where('country_id', $country)->get();
    }


    public function updateIt()
    {
        $this->validate([
            'itName' => 'required',
            'certNo' => 'required',
            'localDepartmentPrefix' => 'max:3',
            'email' => [
                'required',
                'email',
                Rule::unique('local_departments', 'email')->ignore($this->localDepartment->id),
            ],
            'phone' => 'min:9',
            'localDepartmentAddress' => 'required',
            'cityId' => 'required',
            'startDate' => 'required|date|before:endDate',
            'endDate' => 'required|date|after:startDate',
            'locDepDesc' => 'required'
        ], $this->customMessages());

        $this->localDepartment->update([
            'local_department_name' => $this->itName,
            'cert_no' => $this->certNo,
            'local_department_prefix' => $this->localDepartmentPrefix,
            'email' => $this->email,
            'phone' => $this->phone,
            'department_address' => $this->localDepartmentAddress,
            'city_id' => $this->cityId,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'loc_dep_dsc' => $this->locDepDesc,
        ]);

        session()->flash('success', 'Инспекциското тело е успешно ажурирано');
        $this->redirect(route('inspekciski.tela'));
    }


    public function customMessages()
{
    return [
        'itName.required' => 'Полето за име е задолжително.',
        'certNo.required' => 'Полето за сертификат број е задолжително.',
        'localDepartmentPrefix.max' => 'Максимална должина на префиксот е 3 карактери.',
        'email.required' => 'Полето за емаил е задолжително.',
        'email.email' => 'Внесете валидна е-пошта.',
        'email.unique' => 'Оваа емаил адреса е веќе зафатена.',
        'phone.min' => 'Минимална должина на телефонскиот број е 9 карактери.',
        'localDepartmentAddress.required' => 'Полето за адреса е задолжително.',
        'cityId.required' => 'Полето за град е задолжително.',
        'startDate.required' => 'Полето за почеток е задолжително.',
        'startDate.date' => 'Внесете валиден датум за почеток.',
        'startDate.before' => 'Почетниот датум мора да биде пред крајниот датум.',
        'endDate.required' => 'Полето за крај е задолжително.',
        'endDate.date' => 'Внесете валиден датум за крај.',
        'endDate.after' => 'Крајниот датум мора да биде после почетниот датум.',
        'locDepDesc.required' => 'Полето за опис е задолжително.',
    ];
}
}
