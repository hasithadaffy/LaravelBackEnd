<?php

namespace Database\Factories;

use App\Models\form_last_runrs;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormLastRunrsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = form_last_runrs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'runner_id' => 1,
            'position' => '1/11',
            'weight' => 1.3,
            'number' => $this->faker->numberBetween(1, 10000),
            'track' => $this->faker->name(),
            'date' =>  $this->faker->date,
            'category' => $this->faker->randomElement(['Handicap', 'Flat', 'Classic']),
            'stamina' =>$this->faker->randomElement(['Heavy 10', 'Good', 'Soft']),
            'fixed_odds_price' => $this->faker->numberBetween(1.5, 10),

        ];
    }
}
