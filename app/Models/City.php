<?php

namespace App\Models;

use App\Models\Country;
use App\Models\Customer;
use App\Models\LocalDepartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
        'zip',
    ];

    public function localDepartments()
    {
        return $this->hasMany(LocalDepartment::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function customers()
    {
        // return $this->hasManyThrough(Customer::class, LocalDepartment::class);
        return $this->hasMany(Customer::class);
    }
}
