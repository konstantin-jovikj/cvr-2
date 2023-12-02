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

    }
}
