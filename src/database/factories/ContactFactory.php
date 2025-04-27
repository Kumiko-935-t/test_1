<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'last_name' => $this->faker->last_name,
        'first_name' => $this->faker->first_name,
        'tel1'=> $this->faker->number(3),
        'tel2'=> $this->faker->number(4),
        'tel3'=> $this->faker->number(4),
        'email' => $this->faker->email,
        'address' => $this->faker->address,
        'category_id' => '',
        'detail' => 'required'
        ];
    }
}
