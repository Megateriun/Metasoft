<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Objects_user>
 */
class Objects_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'owner'  => $this->faker->unique()->numberBetween(1, 10), // se debe de tener en cuenta la cantidad de usuarios y los objetos que se quiera crear
            'state'  => $this->faker->randomElement([1,2,3,4]),
            'action'  => $this->faker->randomElement([1,2,3]),
            'name_object' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->name()
        ];
    }
}
