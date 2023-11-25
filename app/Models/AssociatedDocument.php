<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociatedDocument extends Model
{

    protected $fillable = ['document_path', 'application_id'];


    use HasFactory;
}
