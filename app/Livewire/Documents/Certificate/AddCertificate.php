<?php

namespace App\Livewire\Documents\Certificate;

use App\Models\Type;
use App\Models\Shape;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Application;
use App\Models\Color;
use App\Models\Fuel;
use App\Models\Note;
use Livewire\Attributes\On;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AddCertificate extends Component
{
    public $application;
    public $customer;
    public $chassis;
    public $fuels;
    public $colors;
    public $notes;
    public $certificateCreated = 1;

    public $certDate; //add
    public $variant; //add
    public $edition; //add
    public $selectedProductionYear;
    public $constTotalMass; //add
    public $legalTotalMass; //add
    public $legalTotalGroupMass; //add
    public $vehicleMass; //add
    public $vehicleType; //add
    public $selectedChassis; //add
    public $applicationMarkMKD; //add
    public $applicationMarkEU; //add
    public $CocNumber; //add
    public $numberOfAxles; //add
    public $allowedPneumatics; //add
    public $length; //add
    public $width; //add
    public $height; //add
    public $axelMassDistibution_1; //add
    public $axelMassDistibution_2; //add
    public $axelMassDistibution_3; //add
    public $axelMassDistibution_4; //add
    public $axelMassDistibution_5; //add
    public $connectionPointMassDistibution; //add
    public $maxStructuralAxleLoad_1; //add
    public $maxStructuralAxleLoad_2; //add
    public $maxStructuralAxleLoad_3; //add
    public $maxStructuralAxleLoad_4; //add
    public $maxStructuralAxleLoad_5; //add
    public $maxConnectionPointLoad; //add
    public $brakedTrailerMaxMass; //add
    public $unbrakedTrailerMaxMass; //add
    public $trailerConnectionPointMaxLoad; //add
    public $pluginDeviceApprovalMark; //add
    public $engineVolume; //add
    public $enginePower; //add
    public $selectedFuel; //add
    public $engineRevolutions; //add
    public $powerMassDistribution; //add
    public $selectedColor_1; //add
    public $selectedColor_2; //add
    public $numberOfSeats; //add
    public $numberOfStandingPlaces; //add
    public $numberOfLieDownPlaces; //add
    public $maxSpeed; //add
    public $stationaryNoiseLevel; //add
    public $noiseAtRpm; //add
    public $co2; //add
    public $selectedNote; //add
    public $certNoteText; //add
    public $modificationReferralNumber; //add
    public $modificationReferralDate; //add

    public function mount(Application $application, Customer $customer)
    {

        // if( $application->is_in_progress == 1){
        //     session()->flash('error', 'Ова барање е зафатено. Некој корисник работи на изработка на потврда.');
        //     $this->reset();
        //     return redirect(route('user.dossier', $customer));
        // } else{
        //     $application->is_in_progress = 1;
        //     $application->save();
        // }

        $this->application = $application;
        $this->customer = $customer;

        $this->certDate = date('Y-m-d');
        $this->chassis = Shape::all();
        $this->fuels = Fuel::all();
        $this->colors = Color::all();
        $this->notes = Note::all();

        // dd( $this->vehicleTypes);
    }



    public function render()
    {
        return view('livewire.documents.certificate.add-certificate');
    }

    public function updatedSelectedNote($note)
    {
        if ($note) {
            $note = Note::find($note);
            if ($note) {
                $this->certNoteText = $note->note_text;
            }
        } else {
            $this->certNoteText = null;
        }
    }



    public function addCertificate()
    {

        $rules = [
            'variant' => 'required',
            'edition' => 'required',
            'selectedProductionYear' => 'required',
            'constTotalMass' => 'numeric',
            'legalTotalMass' => 'numeric',
            'legalTotalGroupMass' => 'numeric',
            'vehicleMass' => 'numeric',
            'vehicleType' => 'required',
            'selectedFuel' => 'required',
            'selectedColor_1' => 'required',
            'selectedColor_2' => '',
            'selectedNote' => '',
            'selectedChassis' => 'required',
            'applicationMarkMKD' => '',
            'applicationMarkEU' => '',
            'CocNumber' => '',
            'numberOfAxles' => 'numeric|digits:1',
            'allowedPneumatics' => '',
            'length' => 'numeric',
            'width' => 'numeric',
            'height' => 'numeric',
            'axelMassDistibution_1' => 'numeric|nullable',
            'axelMassDistibution_2' => 'numeric|nullable',
            'axelMassDistibution_3' => 'numeric|nullable',
            'axelMassDistibution_4' => 'numeric|nullable',
            'axelMassDistibution_5' => 'numeric|nullable',
            'connectionPointMassDistibution' => 'numeric|nullable',
            'maxStructuralAxleLoad_1' => 'numeric|nullable',
            'maxStructuralAxleLoad_2' => 'numeric|nullable',
            'maxStructuralAxleLoad_3' => 'numeric|nullable',
            'maxStructuralAxleLoad_4' => 'numeric|nullable',
            'maxStructuralAxleLoad_5' => 'numeric|nullable',
            'maxConnectionPointLoad' => 'numeric|nullable',
            'brakedTrailerMaxMass' => 'numeric|nullable',
            'unbrakedTrailerMaxMass' => 'numeric|nullable',
            'trailerConnectionPointMaxLoad' => 'numeric|nullable',
            'pluginDeviceApprovalMark' => '',
            'engineVolume' => 'numeric',
            'enginePower' => 'numeric',
            'engineRevolutions' => 'numeric',
            'powerMassDistribution' => 'numeric|nullable',
            'numberOfSeats' => 'numeric',
            'numberOfStandingPlaces' => 'numeric|nullable',
            'numberOfLieDownPlaces' => 'numeric|nullable',
            'maxSpeed' => 'numeric',
            'stationaryNoiseLevel' => 'numeric|nullable',
            'noiseAtRpm' => '',
            'co2' => 'numeric',
            'numberOfLieDownPlaces' => 'numeric|nullable',
            'certNoteText' => '',
        ];

        $validator = Validator::make(
            [
                'variant' => $this->variant,
                'edition' => $this->edition,
                'selectedProductionYear' => $this->selectedProductionYear,
                'constTotalMass' => $this->constTotalMass,
                'legalTotalMass' => $this->legalTotalMass,
                'legalTotalGroupMass' => $this->legalTotalGroupMass,
                'vehicleMass' => $this->vehicleMass,
                'vehicleType' => $this->vehicleType,
                'selectedFuel' => $this->selectedFuel,
                'selectedColor_1' => $this->selectedColor_1,
                'selectedColor_2' => $this->selectedColor_2,
                'selectedNote' => $this->selectedNote,
                'selectedChassis' => $this->selectedChassis,
                'applicationMarkMKD' => $this->applicationMarkMKD,
                'applicationMarkEU' => $this->applicationMarkEU,
                'CocNumber' => $this->CocNumber,
                'numberOfAxles' => $this->numberOfAxles,
                'allowedPneumatics' => $this->allowedPneumatics,
                'length' => $this->length,
                'width' => $this->width,
                'height' => $this->height,
                'axelMassDistibution_1' => $this->axelMassDistibution_1,
                'axelMassDistibution_2' => $this->axelMassDistibution_2,
                'axelMassDistibution_3' => $this->axelMassDistibution_3,
                'axelMassDistibution_4' => $this->axelMassDistibution_4,
                'axelMassDistibution_5' => $this->axelMassDistibution_5,
                'connectionPointMassDistibution' => $this->connectionPointMassDistibution,
                'maxStructuralAxleLoad_1' => $this->maxStructuralAxleLoad_1,
                'maxStructuralAxleLoad_2' => $this->maxStructuralAxleLoad_2,
                'maxStructuralAxleLoad_3' => $this->maxStructuralAxleLoad_3,
                'maxStructuralAxleLoad_4' => $this->maxStructuralAxleLoad_4,
                'maxStructuralAxleLoad_5' => $this->maxStructuralAxleLoad_5,
                'maxConnectionPointLoad' => $this->maxConnectionPointLoad,
                'brakedTrailerMaxMass' => $this->brakedTrailerMaxMass,
                'unbrakedTrailerMaxMass' => $this->unbrakedTrailerMaxMass,
                'trailerConnectionPointMaxLoad' => $this->trailerConnectionPointMaxLoad,
                'pluginDeviceApprovalMark' => $this->pluginDeviceApprovalMark,
                'engineVolume' => $this->engineVolume,
                'enginePower' => $this->enginePower,
                'engineRevolutions' => $this->engineRevolutions,
                'powerMassDistribution' => $this->powerMassDistribution,
                'numberOfSeats' => $this->numberOfSeats,
                'numberOfStandingPlaces' => $this->numberOfStandingPlaces,
                'numberOfLieDownPlaces' => $this->numberOfLieDownPlaces,
                'maxSpeed' => $this->maxSpeed,
                'stationaryNoiseLevel' => $this->stationaryNoiseLevel,
                'noiseAtRpm' => $this->noiseAtRpm,
                'co2' => $this->co2,
                'numberOfLieDownPlaces' => $this->numberOfLieDownPlaces,
                'certNoteText' => $this->certNoteText,
            ],
            $rules,
            $this->customMessages()
        );
        // dd($rules, $validator);
        $validator->validate();
        $this->application->update([
            'has_certificate' => 1,
            'cert_date' => $this->certDate,
            'variant' => $this->variant,
            'edition' => $this->edition,
            'selected_production_year' => $this->selectedProductionYear,
            'const_total_mass' => $this->constTotalMass,
            'legal_total_mass' => $this->legalTotalMass,
            'legal_total_group_mass' => $this->legalTotalGroupMass,
            'vehicle_mass' => $this->vehicleMass,
            'vehicle_type' => $this->vehicleType,
            'fuel_id' => $this->selectedFuel,
            'color_1_id' => $this->selectedColor_1,
            'color_2_id' => $this->selectedColor_2,
            'note_id' => $this->selectedNote,
            'shape_id' => $this->selectedChassis,
            'application_mark_mkd' => $this->applicationMarkMKD,
            'application_mark_eu' => $this->applicationMarkEU,
            'coc_number' => $this->CocNumber,
            'number_of_axles' => $this->numberOfAxles,
            'allowed_pneumatics' => $this->allowedPneumatics,
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'axel_mass_distibution_1' => $this->axelMassDistibution_1,
            'axel_mass_distibution_2' => $this->axelMassDistibution_2,
            'axel_mass_distibution_3' => $this->axelMassDistibution_3,
            'axel_mass_distibution_4' => $this->axelMassDistibution_4,
            'axel_mass_distibution_5' => $this->axelMassDistibution_5,
            'connection_point_mass_distibution' => $this->connectionPointMassDistibution,
            'max_structural_axle_load_1' => $this->maxStructuralAxleLoad_1,
            'max_structural_axle_load_2' => $this->maxStructuralAxleLoad_2,
            'max_structural_axle_load_3' => $this->maxStructuralAxleLoad_3,
            'max_structural_axle_load_4' => $this->maxStructuralAxleLoad_4,
            'max_structural_axle_load_5' => $this->maxStructuralAxleLoad_5,
            'max_connection_point_load' => $this->maxConnectionPointLoad,
            'braked_trailer_max_mass' => $this->brakedTrailerMaxMass,
            'unbraked_trailer_max_mass' => $this->unbrakedTrailerMaxMass,
            'trailer_connection_point_max_load' => $this->trailerConnectionPointMaxLoad,
            'plugin_device_approval_mark' => $this->pluginDeviceApprovalMark,
            'engine_volume' => $this->engineVolume,
            'engine_power' => $this->engineVolume,
            'engine_revolutions' => $this->engineRevolutions,
            'power_mass_distribution' => $this->powerMassDistribution,
            'number_of_seats' => $this->numberOfSeats,
            'number_of_standing_places' => $this->numberOfStandingPlaces,
            'number_of_lie_down_places' => $this->numberOfLieDownPlaces,
            'max_speed' => $this->maxSpeed,
            'stationary_noise_level' => $this->stationaryNoiseLevel,
            'noise_at_rpm' => $this->noiseAtRpm,
            'co2' => $this->co2,
            'cert_note_text' => $this->certNoteText,
        ]);

        session()->flash('success', 'Потврдата е успешно изработена!');
        $this->reset();
        return redirect(route('applications.all'));
    }

    public function customMessages()
    {
        return [
            'variant.required' => 'Полето за варијантата е задолжително.',
            'edition.required' => 'Полето за изданието е задолжително.',
            'selectedProductionYear.required' => 'Полето за избор на година на производство е задолжително.',
            'constTotalMass.numeric' => 'Масата за постојана маса треба да биде во нумерички формат.',
            'legalTotalMass.numeric' => 'Легалната вкупна маса треба да биде во нумерички формат.',
            'legalTotalGroupMass.numeric' => 'Групната легална вкупна маса треба да биде во нумерички формат.',
            'vehicleMass.numeric' => 'Масата на возилото треба да биде во нумерички формат.',
            'vehicleType.required' => 'Полето за типот на возилото е задолжително.',
            'selectedFuel.required' => 'Полето за избор на гориво е задолжително.',
            'selectedColor_1.required' => 'Полето за прва боја е задолжително.',
            'selectedChassis.required' => 'Полето за избор на шасија е задолжително.',
            'numberOfAxles.numeric' => 'Бројот на осовини треба да биде во нумерички формат.',
            'numberOfAxles.digits' => 'Бројот на осовини треба да биде една цифра.',
            'allowedPneumatics' => '',
            'length.numeric' => 'Должината треба да биде во нумерички формат.',
            'width.numeric' => 'Ширината треба да биде во нумерички формат.',
            'height.numeric' => 'Висината треба да биде во нумерички формат.',
            'axelMassDistibution_1.numeric' => 'Масата на осовина 1 треба да биде во нумерички формат.',
            'axelMassDistibution_2.numeric' => 'Масата на осовина 2 треба да биде во нумерички формат.',
            'axelMassDistibution_3.numeric' => 'Масата на осовина 3 треба да биде во нумерички формат.',
            'axelMassDistibution_4.numeric' => 'Масата на осовина 4 треба да биде во нумерички формат.',
            'axelMassDistibution_5.numeric' => 'Масата на осовина 5 треба да биде во нумерички формат.',
            'connectionPointMassDistibution.numeric' => 'Масата на точка на спојување на масата треба да биде во нумерички формат.',
            'maxStructuralAxleLoad_1.numeric' => 'Максималната структурална маса на осовина 1 треба да биде во нумерички формат.',
            'maxStructuralAxleLoad_2.numeric' => 'Максималната структурална маса на осовина 2 треба да биде во нумерички формат.',
            'maxStructuralAxleLoad_3.numeric' => 'Максималната структурална маса на осовина 3 треба да биде во нумерички формат.',
            'maxStructuralAxleLoad_4.numeric' => 'Максималната структурална маса на осовина 4 треба да биде во нумерички формат.',
            'maxStructuralAxleLoad_5.numeric' => 'Максималната структурална маса на осовина 5 треба да биде во нумерички формат.',
            'maxConnectionPointLoad.numeric' => 'Максималната маса на точка на спојување треба да биде во нумерички формат.',
            'brakedTrailerMaxMass.numeric' => 'Максималната маса на зафатен приколка треба да биде во нумерички формат.',
            'unbrakedTrailerMaxMass.numeric' => 'Максималната маса на не-зафатен приколка треба да биде во нумерички формат.',
            'trailerConnectionPointMaxLoad.numeric' => 'Максималната маса на точка на спојување на приколка треба да биде во нумерички формат.',
            'engineVolume.numeric' => 'Обемот на моторот треба да биде во нумерички формат.',
            'enginePower.numeric' => 'Моќноста на моторот треба да биде во нумерички формат.',
            'engineRevolutions.numeric' => 'Обртите на моторот треба да биде во нумерички формат.',
            'powerMassDistribution.numeric' => 'Дистрибуцијата на масата на моќноста треба да биде во нумерички формат.',
            'numberOfSeats.numeric' => 'Бројот на седишта треба да биде во нумерички формат.',
            'numberOfStandingPlaces.numeric' => 'Бројот на места за стоење треба да се во нумерички формат',
            'stationaryNoiseLevel.numeric' => 'Нивото на бучава треба да е во нумерички формат',
            'co2.numeric' => 'Нивото на СО2 треба да е во нумерички формат',
            'numberOfLieDownPlaces.numeric' => 'Бројот на места за лежење треба да се во нумерички формат',

        ];
    }
}
