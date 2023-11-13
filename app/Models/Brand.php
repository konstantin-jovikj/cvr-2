<?php

namespace App\Models;

use App\Models\Application;
use App\Models\Manufacturer;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer_id',
        'brand_name',
        'note',
    ];


    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }



    public function inquiryApplications()
    {
        return $this->hasMany(InquiryApplication::class);
    }
}
