<?php

namespace Database\Factories;

use App\Models\Contactme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactmeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contactme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact_email' => $this->faker->unique()->safeEmail(),
            'contact_phone' => '+541136179324',
            'contact_address' => $this->faker->address,
            'contact_city' => $this->faker->name,
            'user_id' => rand(1,6)
        ];
    }
}
