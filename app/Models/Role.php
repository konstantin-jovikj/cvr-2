<?php

namespace App\Models;

use App\Models\User;
use App\Models\Permision;
use App\Models\LocalDepartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permisions()
    {
        return $this->belongsToMany(Permision::class);
    }

    public function localDepartments()
    {
        return $this->belongsToMany(LocalDepartment::class);
    }
}
