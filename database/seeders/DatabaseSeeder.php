<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use App\Models\ApplicationType;
use App\Models\ConfirmationType;
use App\Models\Relateddocuments;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([CountrySeeder::class]);
        $this->call([CitySeeder::class]);
        $this->call([RoleSeeder::class]);
        $this->call([PermisionSeeder::class]);
        // $this->call([AdminSeeder::class]);
        $this->call([DepartmentSeeder::class]);
        $this->call([LocalDepartmentSeeder::class]);
        $this->call([SuperAdminSeeder::class]);

        $this->call([ApplicationTypeSeeder::class]);
        $this->call([VehicleTypeSeeder::class]);
        $this->call([ConfirmationTypeSeeder::class]);
        $this->call([ColorSeeder::class]);
        $this->call([CustomerTypeSeeder::class]);
        $this->call([FuelSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([ManufacturerSeeder::class]);
        $this->call([BrandSeeder::class]);
        $this->call([TypeSeeder::class]);
        $this->call([MediatorSeeder::class]);
        $this->call([ShapeSeeder::class]);
        $this->call([NoteSeeder::class]);
        $this->call([PictureSeeder::class]);
        // $this->call([AttachmentDocumentSeeder::class]);
        $this->call([RelateddocumentsSeeder::class]);
        $this->call([ModificationTypeSeeder::class]);
        $this->call([ModifiedOrRepairedSeeder::class]);
        $this->call([CorrectionSeeder::class]);
        $this->call([LegalisationSeeder::class]);
    }
}
