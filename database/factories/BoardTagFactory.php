<?php

namespace Database\Factories;

use App\Models\BoardTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoardTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoardTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'boards_id' => 1,
            'tags_id' => 1,
        ];
    }
}
