<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacturer extends Model
{
    use HasFactory;

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
