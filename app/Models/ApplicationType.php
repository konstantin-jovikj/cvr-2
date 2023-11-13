<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplicationType extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_type_name',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
