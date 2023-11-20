<?php

namespace App\Livewire\Documents\Application;


use Carbon\Carbon;
use Livewire\Component;
use App\Models\Customer;
use App\Models\ApplicationType;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ConfirmationType;
use App\Models\Manufacturer;
use App\Models\Mediator;
use App\Models\Type;

class AddApplication extends Component
{

    public $currentCustomer;
    public $appTypes;
    public $appDate;
    public $mediators;
    public $categories;
    public $manufacturers;
    public $brands;
    public $types;
    public $confirmations;
    public $isCnanges;

    public $selected_app_type_name = null;
    public $selectedMediator = null;
    public $selectedCategory = null;
    public $selectedManufacturer = null;
    public $selectedBrand = null;
    public $selectedType = null;

    public function mount(Customer $customer)
    {
        $this->appDate = date('Y-m-d');
        // $this->appDate = date('d-m-Y', strtotime($this->appDate));
        // $this->appDate = strtotime($this->appDate);
        $this->currentCustomer = $customer;
        $this->appTypes = ApplicationType::all();
        $this->mediators = Mediator::all();
        $this->categories = Category::all();
        $this->manufacturers = Manufacturer::all();
        $this->brands = [];
        $this->types = [];
        $this->confirmations = ConfirmationType::all();
        $this->isCnanges = ['Има Преправка' => 1, 'Нема Преправка' => 0];
    }
    public function render()
    {
        return view('livewire.documents.application.add-application');
    }

    public function updatedSelectedManufacturer($manufacturer)
    {
        $this->brands = Brand::where('manufacturer_id', $manufacturer)->get();
        $this->selectedBrand = null;
        $this->selectedType = null;
    }

    public function updatedSelectedBrand($brand)
    {
        $this->types = Type::where('brand_id', $brand)->get();
        $this->selectedType = null;
    }

    public function addApplication()
    {
        // $allFormValues = $this->input();
        dd(
            $this->currentCustomer,
            $this->selected_app_type_name,
            $this->appDate,
            $this->selectedMediator,
            $this->selectedCategory,
            $this->selectedManufacturer,
            $this->selectedBrand,
            $this->selectedType,
            $this->confirmations,
            $this->isCnanges
        );
    }
}
