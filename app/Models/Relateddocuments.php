<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relateddocuments extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc',
    ];

    public function applicationTypes()
    {
        return $this->belongsToMany(ApplicationType::class);
    }
}
