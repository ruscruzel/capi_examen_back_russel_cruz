<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    protected $model = UserDomicilio::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'domicilio' => fake()->streetName(),
            'nuero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->citySuffix(),
            'cp' => fake()->buildingNumber(),
            'ciudad' => fake()->city(),
        ];
    }
}