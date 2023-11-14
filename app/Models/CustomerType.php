<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerType extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_type',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
