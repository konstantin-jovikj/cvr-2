<?php

namespace Database\Seeders;

use App\Models\AttachmentDocuments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttachmentDocuments::create([
            'manufacturer_id' => 1,
            'brand_name' => 'AUDI',
            'note' => '',
        ]);
    }
}
