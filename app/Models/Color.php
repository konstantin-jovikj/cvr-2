<?php

namespace App\Models;

use App\Models\Application;
use App\Models\InquiryApplication;
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

    // public function Applications()
    // {
    //     return $this->hasMany(Application::class);
    // }

    public function applications()
    {
        return $this->hasMany(Application::class, 'color_1_id')->orWhere('color_2_id', $this->id);
    }
}
