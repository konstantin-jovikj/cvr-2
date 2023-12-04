<?php

namespace App\Models;

use App\Models\Fuel;
use App\Models\Note;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;
use App\Models\Shape;
use App\Models\Picture;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Mediator;
use App\Models\Correction;
use App\Models\VehicleType;
use App\Models\Legalisation;
use App\Models\Manufacturer;
use App\Models\ApplicationType;

use App\Models\ConfirmationType;
// use App\Models\AttachmentDocuments;
use App\Models\ModificationType;
use App\Models\AssociatedDocument;
use App\Models\ModifiedOrRepaired;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'app_type_id',
        'app_date',
        'user_id',
        'customer_id',
        'mediator_id',
        'category_id',
        'manufacturer_id',
        'brand_id',
        'type_id',
        'confirmation_id',
        'modification_id',
        'mod_or_rep_id',
        'vehicle_type_id',
        'fuel_id',
        'color_1_id',
        'color_2_id',
        'shape_id',
        'note_id',
        'correction_id',
        'legalisation_id',
        'vin_number',
        'engine_type',
        'engine_number',
        'is_change',
        'note',
        'agreed_price',
        'reg_number',
        'mod_repair_note',
        'traffic_permit_nr',
        'approval_number',
        'approval_date',
        'cert_issued_by',
        'created_at',
        'updated_at',
        'app_number',

        'cert_date',
        'variant',
        'edition',
        'selected_production_year',
        'const_total_mass',
        'legal_total_mass',
        'legal_total_group_mass',
        'vehicle_mass',
        'vehicle_type',
        'application_mark_mkd',
        'application_mark_eu',
        'coc_number',
        'number_of_axles',
        'allowed_pneumatics',
        'length',
        'width',
        'height',
        'axel_mass_distibution_1',
        'axel_mass_distibution_2',
        'axel_mass_distibution_3',
        'axel_mass_distibution_4',
        'axel_mass_distibution_5',
        'connection_point_mass_distibution',
        'max_structural_axle_load_1',
        'max_structural_axle_load_2',
        'max_structural_axle_load_3',
        'max_structural_axle_load_4',
        'max_structural_axle_load_5',
        'max_connection_point_load',
        'braked_trailer_max_mass',
        'unbraked_trailer_max_mass',
        'trailer_connection_point_max_load',
        'plugin_device_approval_mark',
        'engine_volume',
        'engine_power',
        'engine_revolutions',
        'power_mass_distribution',
        'number_of_seats',
        'number_of_standing_places',
        'number_of_lie_down_places',
        'max_speed',
        'stationary_noise_level',
        'noise_at_rpm',
        'co2',
        'cert_note_text',
        'has_certificate',
        'is_in_progress',
        'modificationReferralNumber',
        'modificationReferralDate',


    ];

    public function appType()
    {
        return $this->belongsTo(ApplicationType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function mediator()
    {
        return $this->belongsTo(Mediator::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function confirmation()
    {
        return $this->belongsTo(ConfirmationType::class);
    }

    public function relatedDocuments()
    {
        return $this->belongsToMany(Relateddocuments::class);
    }

    public function modificationType()
    {
        return $this->belongsTo(ModificationType::class);
    }

    public function modOrRepair()
    {
        return $this->belongsTo(ModifiedOrRepaired::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function shape()
    {
        return $this->belongsTo(Shape::class);
    }

    public function note()
    {
        return $this->belongsTo(Note::class);
    }

    // public function pictures()
    // {
    //     return $this->bolongsToMany(Picture::class);
    // }

    public function corrections()
    {
        return $this->belongsTo(Correction::class);
    }

    public function legalisations()
    {
        return $this->belongsTo(Legalisation::class);
    }

    public function associatedImages()
    {
        return $this->hasMany(AssociatedImage::class);
    }

    public function associatedDocs()
    {
        return $this->hasMany(AssociatedDocument::class);
    }
}
