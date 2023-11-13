<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Application;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'note',
    ];


    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function inquiryApplications()
    {
        return $this->hasMany(InquiryApplication::class);
    }
}
