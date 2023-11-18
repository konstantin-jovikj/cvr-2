<?php

namespace App\Models;

use App\Models\Application;
use App\Models\CustomerType;
use App\Models\LocalDepartment;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'role_id',
        'customer_type_id',
        'city_id',
        'embg',
        'embs',
        'id_number',
        'address',
        'phone',
        'discount',
        'note'
    ];


    public function customerType()
    {
        return $this->belongsTo(CustomerType::class);
        // return $this->belongsTo(CustomerType::class, 'customer_type');
    }

    public function inquiryApplications()
    {
        return $this->hasMany(InquiryApplication::class);
    }

    public function localDepartment()
    {
        return $this->belongsTo(LocalDepartment::class);
    }
}
