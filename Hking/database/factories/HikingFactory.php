<?php

namespace Database\Factories;

use App\Models\Hiking;
use Illuminate\Database\Eloquent\Factories\Factory;

class HikingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hiking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return[
        'title' => $this->faker->sentence, //Generates a fake sentence
        'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
        'hiking_id' => User::factory() //Generates a User from factory and extracts id
        ];
    }
}
