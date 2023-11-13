<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shape extends Model
{
    use HasFactory;

    protected $fillable = [
        'body_shape',
        'additional_desc',
        'note',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
