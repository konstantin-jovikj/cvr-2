<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Correction extends Model
{
    use HasFactory;

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
