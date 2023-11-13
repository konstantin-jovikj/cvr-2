<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleType extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
