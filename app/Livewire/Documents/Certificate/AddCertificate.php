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
    public $connectionPointlMassDistibution; //add
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

    public function mount(Application $application, Customer $customer)
    {
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
        $this->application->update([
            'has_certificate' => '1',
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
            'connection_point_mass_distibution' => $this->connectionPointlMassDistibution,
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
}
