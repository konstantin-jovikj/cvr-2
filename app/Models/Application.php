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
use App\Models\VehicleType;
use App\Models\Manufacturer;
use App\Models\ApplicationType;
use App\Models\ConfirmationType;
use App\Models\ModificationType;

use App\Models\ModifiedOrRepaired;
// use App\Models\AttachmentDocuments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_type_id',
        'user_id',
        'customer_id',
        'mediator_id',
        'category_id',
        'manufacturer_id',
        'brand_id',
        'type_id',
        'confirmation_id',
        // 'attached_doc_id',
        'modification_id',
        'mod_or_rep_id',
        'vehicle_type_id',
        'fuel_id',
        'color_id',
        'shape_id',
        'note_id',
        'vin_number',
        'engine_type',
        'engine_number',
        'is_correction',
        'is_change',
        'note',
        'agreed_price',
        'reg_number',
        'mod_repair_note',
        'traffic_permit_nr',
        'production_year',
        'application_number',
        'application_date',
        'cert_issued_by',

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

    public function pictures()
    {
        return $this->bolongsToMany(Picture::class);
    }
}
