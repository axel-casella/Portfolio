<?php

namespace Database\Factories;

use App\Models\Aboutme;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutmeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aboutme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'personaldescription' => $this->faker->text,
            'service' => $this->faker->name,
            'servicedescription' => $this->faker->text,
            'typeproyect' => $this->faker->name,
            'titleproyect' => $this->faker->name,
            'titleproyectdescription' => $this->faker->text,
            'proyectdescription' => $this->faker->text,
            'review' => $this->faker->text,
            'namehumanreview' => $this->faker->name,
            'user_id' => rand(1,6)
        ];
    }
}
