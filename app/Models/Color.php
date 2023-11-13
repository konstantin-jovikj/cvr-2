<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_name',
        'color_code',
        'note',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
