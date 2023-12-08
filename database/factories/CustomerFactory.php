<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id' => $this->faker->unique()->randomNumber(2,200),
            'local_department_id' => 4,
            'customer_type_id' => 1,
            'city_id' => $this->faker->numberBetween(1, 35),
            'customer_name' => $this->faker->name(),
            'embg' => $this->faker->numberBetween(1000000000000, 9999999999999),
            'embs' => $this->faker->numberBetween(1000000, 9999999),
            'id_number' => $this->faker->randomElement([$this->faker->numberBetween(10000, 99999), $this->faker->regexify('[A-Za-z0-9]{1,5}')]),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'discount' => $this->faker->numberBetween(0, 5),
            'note' => $this->faker->text(80),
        ];
    }
}

