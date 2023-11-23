<?php

namespace App\Models;

use App\Models\ApplicationType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
