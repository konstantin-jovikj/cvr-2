<?php

namespace App\Models;

use App\Models\Application;
use App\Models\ApplicationType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = ['picture_name'];

    // public function applications()
    // {
    //     return $this->belongsToMany(Application::class);
    // }

    public function applicationTypes()
    {
        return $this->belongsToMany(ApplicationType::class);
    }
}
