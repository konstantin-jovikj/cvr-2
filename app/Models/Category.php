<?php

namespace App\Models;

use App\Models\FindingTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function findingTables()
    {
        return $this->hasMany(FindingTable::class);
    }

}
