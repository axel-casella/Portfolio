<?php

namespace Database\Factories;

use App\Models\Workexperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkexperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Workexperience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_name' => $this->faker->name,
            'work_place' => $this->faker->name,
            'responsibility_work' => $this->faker->text,
            'start_work' => $this->faker->date,
            'finish_work' => $this->faker->date,
            'user_id' => rand(1,6)
        ];
    }
}


