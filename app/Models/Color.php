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

    public function inquiryApplications()
    {
        return $this->hasMany(InquiryApplication::class);
    }
}
