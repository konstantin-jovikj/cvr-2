<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id',
            'app_type_id'=> $this->faker->numberBetween(1, 2),
            'app_date'=> $this->faker->date(),
            'user_id' => 1,
            'customer_id' => $this->faker->numberBetween(1, 999),
            'mediator_id' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 2),
            'manufacturer_id' => 3,
            'brand_id' => 4,
            'type_id' => 3,
            'confirmation_id' => $this->faker->numberBetween(1, 3),
            'modification_id'=> $this->faker->numberBetween(1, 12),
            'mod_or_rep_id' => 1,
            'vehicle_type_id'=> 1,
            'fuel_id' => $this->faker->numberBetween(1, 8),
            'color_1_id' => $this->faker->numberBetween(1, 150),
            'color_2_id' => $this->faker->numberBetween(1, 150),
            'shape_id' => $this->faker->numberBetween(1, 75),
            'note_id' => $this->faker->numberBetween(1, 20),
            'correction_id' => $this->faker->numberBetween(1, 2),
            'legalisation_id'=> $this->faker->numberBetween(1, 2),
            'vin_number'  => $this->faker->numberBetween(10000000000000000, 99999999999999999),
            'engine_type' => $this->faker->numberBetween(1000000000, 9999999999),
            'engine_number' => $this->faker->numberBetween(1000000000000, 9999999999000),
            'is_change' => 1,
            'note' => $this->faker->text(),
            'agreed_price' => $this->faker->numberBetween(10000, 99999),
            'reg_number'=> $this->faker->numberBetween(1000000, 9999999),
            'mod_repair_note' => $this->faker->countryCode(),
            'traffic_permit_nr' => $this->faker->numberBetween(1000000, 9999999),
            'approval_number' => $this->faker->numberBetween(1000000, 9999999),
            'approval_date' => $this->faker->date(),
            'cert_issued_by'=> $this->faker->name(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'app_number' => 'AT1-' . $this->faker->month() . $this->faker->year(),
        ];
    }
}
