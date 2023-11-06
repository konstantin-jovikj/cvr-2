<?php

namespace App\Models;

use App\Models\User;
use App\Models\LocalDepartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
    ];


    public function localDepartments()
    {
        return $this->hasMany(LocalDepartment::class);
    }
}
