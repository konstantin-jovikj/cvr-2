<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConfirmationType extends Model
{
    use HasFactory;

    protected $fillable = [
        'confirmation_name',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
