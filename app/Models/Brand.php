<?php

namespace App\Models;

use App\Models\Application;
use App\Models\Manufacturer;
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



    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
