<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'fuel_type',
        'note',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
