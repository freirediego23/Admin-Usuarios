<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'correo_electronico' => fake()->email(),
            'fecha_registro' => fake()->date(),
        ];

        // nombre');
        //     $table->string('apellido');
        //     $table->string('correo_electronico');
        //     $table->string('fecha_registro'
    }
}