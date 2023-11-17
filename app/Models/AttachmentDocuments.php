<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttachmentDocuments extends Model
{
    use HasFactory;


    protected $fillable = [
        'desc',
    ];


}
