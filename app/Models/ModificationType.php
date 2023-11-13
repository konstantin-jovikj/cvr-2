<?php

namespace App\Models;

use App\Models\Application;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModificationType extends Model
{
    use HasFactory;

    protected $fillable = [
        'modification_name',
    ];

    public function inquiryApplications()
    {
        return $this->hasMany(InquiryApplication::class);
    }
}
