<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssociatedImage extends Model
{
    use HasFactory;

    protected $fillable = ['image_path', 'application_id'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
