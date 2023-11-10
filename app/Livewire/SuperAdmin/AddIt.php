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

    #[Rule('date')]
    public $startDate = '';

    #[Rule('date')]
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
        dd(  $this->validate());
        LocalDepartment::create([
            'itName' => $this->itName,
        ]);
    }
}
