<?php

namespace App\Models;

use App\Models\CustomerType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class);
        // return $this->belongsTo(CustomerType::class, 'customer_type');
    }
}
