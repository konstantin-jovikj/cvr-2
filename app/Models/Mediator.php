<?php

namespace App\Models;

use App\Models\Application;
use App\Models\LocalDepartment;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mediator extends Model
{
    use HasFactory;

    protected $fillable = [
        'local_department_id',
        'mediator_name',
        'mediator_address',
        'mediator_phone',
        'note',
    ];

    public function Applications()
    {
        return $this->hasMany(Application::class);
    }

    public function localDepartment()
    {
        return $this->belongsTo(LocalDepartment::class);
    }
}
