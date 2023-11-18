<?php

namespace App\Models;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use App\Models\Customer;
use App\Models\Mediator;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocalDepartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'department_id',
        'local_department_name',
        'local_department_prefix',
        'department_address',
        'cert_no',
        'phone',
        'email',
        'loc_dep_dsc',
        'start_date',
        'end_date',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function mediators()
    {
        return $this->hasMany(Mediator::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }


}
