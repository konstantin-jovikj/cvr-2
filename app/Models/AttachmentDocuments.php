<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttachmentDocuments extends Model
{
    use HasFactory;


    protected $fillable = [
        'application_id',
        'is_available',
        'number',
        'desc',
        'doc_path',
    ];


    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
