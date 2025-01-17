<?php

namespace App\Models;

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
}
