<?php

namespace App\Models;

use App\Models\Application;
use App\Models\InquiryApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mediator extends Model
{
    use HasFactory;

    protected $fillable = [
        'mediator_name',
        'note',
    ];

    public function Applications()
    {
        return $this->hasMany(Application::class);
    }
}
