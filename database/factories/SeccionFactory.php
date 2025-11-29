<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seccion>
 */
class SeccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'seccion'=> 'Seccion' . $this->faker->unique()->numberBetween(1,50), //
        'aula' =>'Aula' . $this->faker->numberBetween(1,20),
        ];
    }
}
