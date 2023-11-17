<?php

namespace App\Models;

use App\Models\Picture;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplicationType extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'app_type_name',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function pictures()
    {
        return $this->belongsToMany(Picture::class);
    }
}
