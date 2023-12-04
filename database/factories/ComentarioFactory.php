<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Comentario;
use App\Models\User;

class ComentarioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => fake()->words(3, true),
            'publicacion' => fake()->paragraph(3),
            'fecha' => fake()->date('Y-m-d'),
            'user_id' => User::all()->random()->id
        ];
    }
}
