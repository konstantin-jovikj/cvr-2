<?php

namespace App\Livewire\SuperAdmin;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

use App\Models\LocalDepartment;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

class AddIt extends Component
{
    public $countries = null;
    public $cities = null;
    public $localDepartments;

    public $departmentId = '';
    public $cityId = '';

    #[Rule('required')]
    public $itName = '';

    #[Rule('required')]
    public $certNo = '';

    #[Rule('max:3')]
    public $localDepartmentPrefix = '';

    #[Rule('required|min:3')]
    public $localDepartmentAddress = '';

    #[Rule('min:9')]
    public $phone = '';

    #[Rule('required|email|unique:local_departments,email')]
    public $email = '';

    public $locDepDesc = '';

    #[Rule('required|date|before:endDate')]
    public $startDate = '';

    #[Rule('required|date|after:startDate')]
    public $endDate = '';

    public $country = null;






    public function mount()
    {
        $this->countries = Country::all();
        $this->cities = [];
    }



    #[Layout('components.layouts.superadmin')]
    public function render()
    {
        return view('livewire.super-admin.add-it');
    }


    public function updatedCountry($country)
    {
        $this->cities = City::where('country_id', $country)->get();
        $this->cityId = null;
    }

    public function saveIt()
    {
        $this->validate();
        LocalDepartment::create([
            'department_id' => 2,
            'local_department_name' => $this->itName,
            'cert_no' => $this->certNo,
            'local_department_prefix' => $this->localDepartmentPrefix,
            'email' => $this->email,
            'phone' => $this->phone,
            'department_address' => $this->localDepartmentAddress,
            'city_id ' => $this->cityId,
            'start_date'=>$this->startDate,
            'end_date'=> $this->endDate,
            'loc_dep_dsc' => $this->locDepDesc
        ]);
        session()->flash('success', 'Инспекциското тело е успешно додадено!');
        return redirect(route('inspekciski.tela'));
        $this->reset();
    }
}
