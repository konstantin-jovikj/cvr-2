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
use App\Models\ModificationType;
use App\Models\ModifiedOrRepaired;
use App\Models\Type;
use App\Models\VehicleType;
use Illuminate\Support\Facades\Validator;


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
    public $isCorrection;
    public $isChange;
    public $isLegalisation;
    public $modificationTypes;
    public $modOrRepaired;
    public $traffic_permit_nr;
    public $vehicle_type_id;
    public $vin_number ='';
    public $engine_type = '';
    public $engine_number = '';
    public $note = '';
    public $agreed_price = '';
    public $mod_repair_note = '';
    public $reg_number = '';
    public $production_year = '';
    public $approval_date = '';
    public $cert_issued_by = '';

    public $selectedAppTypeName = null;
    public $selectedMediator = null;
    public $selectedCategory = null;
    public $selectedManufacturer = null;
    public $selectedBrand = null;
    public $selectedType = null;
    public $selectedModificationType = null;
    public $selectedAppType;
    public $selectedVehicleTypes = null;
    public $selectedIsLegalisation = null;
    public $selectedCorrection = null;
    public $selectedModOrRepaired = null;
    public $selectedVehicleTypeId = null;
    public $selectedConfirmation = null;


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
        $this->isCorrection = ['Има_Преправка' => 1, 'Нема_Преправка' => 0];
        $this->isLegalisation = ['Да' => 1, 'Не' => 0];
        $this->modificationTypes = ModificationType::all();
        $this->modOrRepaired = ModifiedOrRepaired::all();
        $this->selectedVehicleTypes = VehicleType::all();
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

    public function updatedSelectedAppTypeName($appType)
    {
        $this->selectedAppType = $appType;
        // $this->validateOnly('selectedAppTypeName');
    }

    public function addApplication()
    {
        $rules = [
            'app_type_id' => 'required',
            'user_id' => 'required',
            'app_date' => 'required',
            'customer_id' => 'required',
            'mediator_id' => 'required',
            'category_id' => 'required',
            'manufacturer_id' => 'required',
            'brand_id' => 'required',
            'type_id' => 'required',
            'vin_number' => 'required',
            'engine_type' => 'required',
            'engine_number' => 'required',
            'confirmation_id' => 'required',
            'note' => 'required',
            'agreed_price' => 'required',

        ];

        if ($this->selectedAppType == 1) {
            $rules['selectedConfirmation'] = 'required';
            $rules['selectedCorrection'] = 'required';
        } else {
            unset($rules['selectedConfirmation']);
            unset($rules['selectedCorrection']);
        }

        if ($this->selectedAppType == 2 || $this->selectedAppType == 3) {
            $rules['selectedIsLegalisation'] = 'required';
        } else {
            unset($rules['selectedIsLegalisation']);
        }

        if ($this->selectedAppType == 4) {
            $rules['reg_number'] = 'required';
            $rules['selectedModificationType'] = 'required';
            $rules['mod_repair_note'] = '';
            $rules['selectedModOrRepaired'] = 'required';
        } else {
            unset($rules['reg_number']);
            unset($rules['selectedModificationType']);
            unset($rules['mod_repair_note']);
            unset($rules['selectedModOrRepaired']);
        }

        if ($this->selectedAppType == 6) {
            $rules = [];
        }

        if ($this->selectedAppType == 7 || $this->selectedAppType == 8) {
            $rules['reg_number'] = 'required';
            $rules['traffic_permit_nr'] = 'required';
            $rules['production_year'] = 'required';
            $rules['selectedVehicleTypeId'] = 'required';
            $rules['approval_date'] = 'required';
            $rules['cert_issued_by'] = 'required';
        } else {
            unset($rules['reg_number']);
            unset($rules['traffic_permit_nr']);
            unset($rules['production_year']);
            unset($rules['selectedVehicleTypeId']);
            unset($rules['approval_date']);
            unset($rules['cert_issued_by']);
        }

        $validator = Validator::make(
            [
                'app_type_id' => $this->selectedAppType,
                'user_id' => auth()->user()->id,
                'app_date' => $this->appDate,
                'customer_id' => $this->currentCustomer->id,
                'mediator_id' => $this->selectedMediator,
                'category_id' => $this->selectedCategory,
                'manufacturer_id' => $this->selectedManufacturer,
                'brand_id' => $this->selectedBrand,
                'type_id' => $this->selectedType,
                'vin_number' => $this->vin_number,
                'engine_type' => $this->engine_type,
                'engine_number' => $this->engine_number,
                'confirmation_id' => $this->selectedConfirmation,
                'note' => $this->note,
                'agreed_price' => $this->agreed_price,
                'is_correction' =>$this->selectedCorrection,
                'is_legalisation' => $this->selectedIsLegalisation,
                'reg_number' =>$this->reg_number,
                'modification_id' => $this->selectedModificationType->id,
                'mod_repair_note' => $this->mod_repair_note,
                'mod_or_rep_id' => $this->selectedModOrRepaired,
                'traffic_permit_nr' => $this->traffic_permit_nr,
                'production_year' => $this->production_year,
                'vehicle_type_id' => $this->selectedVehicleTypeId,
                'approval_date' => $this->approval_date,
                'cert_issued_by' => $this->cert_issued_by
            ],
            $rules,
            // $this->customMessages()
        );

        $validator->validate();
    }
}
