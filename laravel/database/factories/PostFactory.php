<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

use function PHPSTORM_META\map;

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
    public function definition()
    {
        return [ //mt_rand untuk membangkitkan bilangan random (minimal berap kata,palig banyank)
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(
                    fn ($p) => "<p>$p</p>"
                )->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 2)

        ];
    }
}
