<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = $this->faker->sentence();

        return [
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'descricao' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(3, true),
        ];
    }

    public function active()
    {
        return $this->state(function (array $attributes) {
            return [
                'ativo' => true,
            ];
        });

    }
}
