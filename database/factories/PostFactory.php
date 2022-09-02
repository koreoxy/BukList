<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1, 1)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'penulis' => $this->faker->name(),
            'tanggal_rilis' => $this->faker->dateTime(),
            'rating' => $this->faker->randomFloat(1, 5, 10),
            'halaman' => $this->faker->randomDigit(),
            'bahasa' => $this->faker->word(),
            // 'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5, 10))) . '</p>',

            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),

            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
