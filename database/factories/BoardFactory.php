<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\Kind;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class BoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Board::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'tepra_number' => Str::random(7),
            'kind_id' => 1,
            'photo_path' => $this->faker->imageUrl(),
            'detail' => $this->faker->realText(),
        ];
    }
}
