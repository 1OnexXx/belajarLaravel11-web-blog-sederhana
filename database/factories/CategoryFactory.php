<?php
namespace Database\Factories;

use App\Models\Category; // Tambahkan ini jika perlu, walaupun Laravel biasanya bisa mengasosiasikan secara otomatis.
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(rand(1, 2), false),
            'slug' => Str::slug($this->faker->sentence(rand(1, 2), false))
        ];
    }
}
