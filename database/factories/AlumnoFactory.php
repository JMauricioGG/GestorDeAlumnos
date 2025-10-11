<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->numerify('#######'),
            'nombre' => $this->faker->name,
            'correo' => $this->faker->unique()->safeEmail,
            'fecha_nacimiento' => $this->faker->date('Y-m-d', '2005-01-01'),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'carrera' => $this->faker->randomElement(['Ingeniería', 'Medicina', 'Arquitectura']),
        ];
    }
}
