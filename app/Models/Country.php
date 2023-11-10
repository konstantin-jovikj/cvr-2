<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;



    protected $fillable = [
        'country_name',
        'code',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
