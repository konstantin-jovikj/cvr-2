<?php

namespace App\Livewire\Documents\Application;

use Carbon\Carbon;
use Livewire\Attributes\Validate;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Picture;
use Livewire\Component;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Mediator;
use App\Models\Correction;
use App\Models\Application;
use App\Models\VehicleType;
use App\Models\Legalisation;
use App\Models\Manufacturer;
use Livewire\WithFileUploads;
use App\Models\ApplicationType;
use App\Models\AssociatedDocument;
use App\Models\AssociatedImage;
use App\Models\LocalDepartment;
use Illuminate\Validation\Rule;
use App\Models\ConfirmationType;
use App\Models\ModificationType;
use App\Models\Relateddocuments;
use App\Models\ModifiedOrRepaired;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;




class AddApplication extends Component
{
    use WithFileUploads;

    public $currentCustomer;
    public $appTypes;
    public $appDate;
    public $mediators;
    public $categories;
    public $manufacturers;
    public $brands;
    public $types;
    public $confirmations;
    public $isCorrection = 0;
    public $isChange;
    public $isLegalisation;
    public $modificationTypes;
    public $modOrRepaired;
    public $trafficPermitNr;
    public $vehicle_type_id;
    public $vinNumber = null;
    public $engineType = '';
    public $engineNumber = null;
    public $note = '';
    public $agreedPrice = '';
    public $modRepairNote = '';
    public $regNumber = '';
    public $productionYear = '';
    public $approvalNumber = '';
    public $approvalDate;
    public $certIssuedBy = '';
    public $corrections;
    public $legalisations;
    public $app_number = null;

    public $selectedAppTypeName = null;
    public $selectedMediator = null;
    public $selectedCategory = null;
    public $selectedManufacturer = null;
    public $selectedBrand = null;
    public $selectedType = null;
    public $selectedModificationType;
    public $selectedAppType;
    public $selectedVehicleTypes = null;
    public $selectedIsLegalisation;
    public $selectedCorrection = 1;
    public $selectedModOrRepaired = null;
    public $selectedVehicleTypeId = null;
    public $selectedConfirmation;

    // pictures and Documents

    public $pictures;
    public $relatedDocs;

    public $currentAppId;
    public $appCurentNumber;

    // #[Validate('required')]
    // #[Validate(['uploadedImages.*' => 'image|max:1024'])]
    public $uploadedImages = [];
    public $uploadedDocs = [];

    public function mount(Customer $customer)
    {
        $this->appDate = date('Y-m-d');
        $this->currentCustomer = $customer;
        $this->appTypes = ApplicationType::all();
        $this->mediators = Mediator::all();
        $this->categories = Category::all();
        $this->manufacturers = Manufacturer::all();
        $this->brands = [];
        $this->types = [];
        $this->confirmations = ConfirmationType::all();
        $this->corrections = Correction::all();
        $this->legalisations = Legalisation::all();
        $this->modificationTypes = ModificationType::all();
        $this->modOrRepaired = ModifiedOrRepaired::all();
        $this->selectedVehicleTypes = VehicleType::all();

        // pictures and Documents
        $this->pictures = [];
        $this->relatedDocs = [];
        // dd($this->pictures);
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
        $this->pictures = ApplicationType::find($appType)->pictures;
        $this->relatedDocs = ApplicationType::find($appType)->relatedDocuments;
    }

    public function addApplication()
    {
        $rules = [
            'selectedAppTypeName' => 'required',
            'appDate' => 'required',
            'selectedMediator' => 'required',
            'selectedCategory' => 'required',
            'selectedManufacturer' => 'required',
            'selectedBrand' => 'required',
            'selectedType' => 'required',
            'app_number' => [
                'required',
                Rule::unique('applications', 'app_number')->whereNotNull('app_number'),
            ],
            'vinNumber' => [
                'required',
                'regex:/^[^QqIiOo\s]{17}$/',
                Rule::unique('applications', 'vin_number')->whereNotNull('vin_number'),
            ],
            'engineNumber' => [
                'required',
                Rule::unique('applications', 'engine_number')->whereNotNull('engine_number'),
            ],
            'note' => 'required',
            'agreedPrice' => 'required',
            'isChange' => 'required',
            'uploadedImages.*' => 'image|max:4096',
            'uploadedDocs.*' => 'max:1024',
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
            $rules['regNumber'] = 'required';
            $rules['selectedModificationType'] = 'required';
            $rules['modRepairNote'] = '';
            $rules['selectedModOrRepaired'] = 'required';
        } else {
            unset($rules['regNumber']);
            unset($rules['selectedModificationType']);
            unset($rules['modRepairNote']);
            unset($rules['selectedModOrRepaired']);
        }

        if ($this->selectedAppType == 6) {
            $rules = [];
            $rules = [
                'uploadedImages.*' => 'image|max:4096',
                'uploadedDocs.*' => 'max:1024',
            ];
        }

        if ($this->selectedAppType == 7 || $this->selectedAppType == 8) {
            $rules['regNumber'] = 'required';
            $rules['trafficPermitNr'] = 'required';
            $rules['productionYear'] = 'required';
            $rules['selectedVehicleTypeId'] = 'required';
            $rules['approvalNumber'] = 'required';
            $rules['approvalDate'] = 'required';
            $rules['certIssuedBy'] = 'required';
        } else {
            unset($rules['regNumber']);
            unset($rules['trafficPermitNr']);
            unset($rules['productionYear']);
            unset($rules['selectedVehicleTypeId']);
            unset($rules['approvalNumber']);
            unset($rules['approvalDate']);
            unset($rules['certIssuedBy']);
        }

        $validator = Validator::make(
            [
                'selectedAppTypeName' => $this->selectedAppTypeName,
                'appDate' => $this->appDate,
                'selectedMediator' => $this->selectedMediator,
                'selectedCategory' => $this->selectedCategory,
                'selectedManufacturer' => $this->selectedManufacturer,
                'selectedBrand' => $this->selectedBrand,
                'selectedType' => $this->selectedType,
                'app_number' => $this->generateAppNumber(),
                'vinNumber' => $this->vinNumber,
                'engineType' => $this->engineType,
                'engineNumber' => $this->engineNumber,
                'selectedConfirmation' => $this->selectedConfirmation,
                'isChange' => $this->isChange,
                'note' => $this->note,
                'agreedPrice' => $this->agreedPrice,
                'selectedCorrection' => $this->selectedCorrection,
                'selectedIsLegalisation' => $this->selectedIsLegalisation,
                'regNumber' => $this->regNumber,
                'selectedModificationType' => $this->selectedModificationType,
                'modRepairNote' => $this->modRepairNote,
                'selectedModOrRepaired' => $this->selectedModOrRepaired,
                'trafficPermitNr' => $this->trafficPermitNr,
                'productionYear' => $this->productionYear,
                'selectedVehicleTypeId' => $this->selectedVehicleTypeId,
                'approvalNumber' => $this->approvalNumber,
                'approvalDate' => $this->approvalDate,
                'certIssuedBy' => $this->certIssuedBy,
                'uploadedImages' => $this->uploadedImages,
                'uploadedDocs' => $this->relatedDocs,
            ],
            $rules,
            $this->customMessages()
        );
        // dd($rules, $validator);
        $validator->validate();

        $newApplication = Application::create([
            'app_type_id' => $this->selectedAppType,
            'user_id' => auth()->user()->id,
            'app_date' => $this->appDate,
            'customer_id' => $this->currentCustomer->id,
            'mediator_id' => $this->selectedMediator,
            'category_id' => $this->selectedCategory,
            'manufacturer_id' => $this->selectedManufacturer,
            'brand_id' => $this->selectedBrand,
            'type_id' => $this->selectedType,
            'app_number' => $this->generateAppNumber(),
            'vin_number' => $this->vinNumber,
            'engine_type' => $this->engineType,
            'engine_number' => $this->engineNumber,
            'confirmation_id' => $this->selectedConfirmation,
            'is_change' => $this->isChange,
            'note' => $this->note,
            'agreed_price' => $this->agreedPrice,
            'correction_id' => $this->selectedCorrection,
            'legalisation_id' => $this->selectedIsLegalisation,
            'reg_number' => $this->regNumber,
            'modification_id' => $this->selectedModificationType,
            'mod_repair_note' => $this->modRepairNote,
            'mod_or_rep_id' => $this->selectedModOrRepaired,
            'traffic_permit_nr' => $this->trafficPermitNr,
            'production_year' => $this->productionYear,
            'vehicle_type_id' => $this->selectedVehicleTypeId,
            'approval_number' => $this->approvalNumber,
            'approval_date' => $this->approvalDate,
            'cert_issued_by' => $this->certIssuedBy
        ]);

        // Upload Images


        $this->currentAppId = $newApplication->id;
        $this->appCurentNumber = $newApplication->app_number;
        $this->appCurentNumber = str_replace('/', '-', $this->appCurentNumber);

        $userDepartment = auth()->user()->department->id;
        $userLocalDept = auth()->user()->localDepartment->id;

        $appType = $newApplication->app_type_id;

        $this->pictures = ApplicationType::find($appType)->pictures;

        $year = date('Y', strtotime($this->appDate));
        $month = date('m', strtotime($this->appDate));
        $day = date('d', strtotime($this->appDate));

        foreach ($this->uploadedImages as $picture_name => $photo) {
            // dd($picture_name, $photo);
            $extension = $photo->getClientOriginalExtension();
            $AppNumberPrefix = $this->appCurentNumber;

            $path = $photo->store("{$userDepartment}/{$userLocalDept}/{$year}/{$month}/{$day}/{$this->currentAppId}", 'public');

            $picture_desc_with_extension_and_prefix = $AppNumberPrefix . '-' .$picture_name . '.' . $extension;

            AssociatedImage::create([
                'application_id' => $newApplication->id,
                'image_path' => $path,
                'image_name' => $picture_desc_with_extension_and_prefix,
            ]);
        }


        foreach ($this->uploadedDocs as $document_desc => $doc) {

            $extension = $doc->getClientOriginalExtension();
            $AppNumberPrefix = $this->appCurentNumber;

            $path = $doc->store("{$userDepartment}/{$userLocalDept}/{$year}/{$month}/{$day}/{$this->currentAppId}", 'app_docs');

            $document_desc_with_extension_and_prefix = $AppNumberPrefix . '-' .$document_desc . '.' . $extension;
            AssociatedDocument::create([
                'application_id' => $newApplication->id,
                'document_path' => $path,
                'document_desc' => $document_desc_with_extension_and_prefix,
            ]);
        }

        session()->flash('success', 'Барањето е успешно додадено!');
        $this->reset();
        return redirect(route('applications.all'));
    }

    public function customMessages()
    {
        return [
            'selectedAppTypeName.required' => 'Типот на барање задолжителен.',
            'appDate.required' => 'Датумот на барањето е задолжителен.',
            'selectedMediator.required' => 'Изборот на посредникот е задолжителен.',
            'selectedCategory.required' => 'Изборот на категоријата е задолжителен.',
            'selectedManufacturer.required' => 'Изборот на производителот е задолжителен.',
            'selectedBrand.required' => 'Изборот на марка е задолжителена.',
            'selectedType.required' => 'Изборот на тип е задолжителен.',
            'vinNumber.required' => 'Бројот на шасијата (VIN) е задолжителен.',
            'vinNumber.regex' => 'Бројот на шасијата (VIN) мора да биде со должина од 17 карактери без Q, I, O, и празни места.',
            'vinNumber.unique' => 'Бројот на шасијата (VIN) веќе постои.',
            'engineNumber.required' => 'Бројот на моторот е задолжителен.',
            'engineNumber.unique' => 'Бројот на моторот веќе постои.',
            'note.required' => 'Забелешката е задолжителна.',
            'agreedPrice.required' => 'Договорената цена е задолжителна.',
            'isChange.required' => 'Статусот на промената е задолжителен.',
            'selectedConfirmation.required' => 'Изборот на типот на потврдата е задолжителен.',
            'selectedCorrection.required' => 'Изборот на преправка е задолжителен.',
            'selectedIsLegalisation.required' => 'Изборот на статусот на легализацијата е задолжителен.',
            'regNumber.required' => 'Регистарскиот број е задолжителен.',
            'trafficPermitNr.required' => 'Бројот на сообраќајната дозвола е задолжителен.',
            'productionYear.required' => 'Годината на производство е задолжителна.',
            'selectedVehicleTypeId.required' => 'Изборот на типот на возилото е задолжителен.',
            'approvalNumber.required' => 'Бројот на одобрението е задолжителен.',
            'approvalDate.required' => 'Датумот на одобрението е задолжителен.',
            'certIssuedBy.required' => 'Полето за издавач на потврда е задолжително.',
            'uploadedImages.*.image' => 'Прикачената датотека мора да биде фотографија.',
            'uploadedImages.*.max' => 'Прикачената слика не може да биде поголема од 4MB.',
            'uploadedDocs.*.max' => 'Прикачениот фајл не може да биде поголем од 1MB.',
        ];
    }

    //DELOVODEN BROJ//

    public function generateAppNumber()
    {
        $user = auth()->user();
        $localDepartmentId = $user->local_department_id;

        $prefix = LocalDepartment::where('id', $localDepartmentId)->value('local_department_prefix');
        $month = date('m', strtotime($this->appDate));
        $year = date('Y', strtotime($this->appDate));
        $shortYear = substr($year, -2);

        // Count of applications created within the current year
        $countApp = Application::whereYear('created_at', $year)->count();
        $countAppPadded = str_pad($countApp + 1, 5, '0', STR_PAD_LEFT);

        $appNumber = $prefix .  $month . $shortYear . '/' . $countAppPadded;

        return $appNumber;
    }



    // $userDepartment = auth()->user()->department->id;
    // $userLocalDept = auth()->user()->localDepartment->id;
    // $expectedImageNr = count($this->pictures);
    // $uploadedImegeNr = count($this->uploadedImages);



    //     $validated = $this->validate();

    //     $path = $uploadedImage->storeAs("attached_files/{$userDepartment}/{$userLocalDept}/{$this->currentAppId}",
    //         $customFileName);




    // public function customImageMessages()
    // {
    //     return [
    //         'uploadedImages.*.required' => 'Оваа фотографија е задолжителна.',
    //         'uploadedImages.*.image' => 'Фајлот мора да биде слика.',
    //         'uploadedImages.*.mimes' => 'Поддржани формати на слики: jpeg, png, jpg, gif, webp',
    //         'uploadedImages.*.max' => 'Максимална големина на фотографијата е 3MB.',
    //     ];
    // }
}
