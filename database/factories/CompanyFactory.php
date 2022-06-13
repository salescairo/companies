<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->catchPhrase(),
            'fantasy_name'=> $this->faker->company(),
            'address'=> $this->faker->streetAddress(),
            'neighborhood'=> $this->faker->streetName(),
            'number'=>$this->faker->buildingNumber(),
            'phone'=> $this->faker->e164PhoneNumber(),
            'email'=> $this->faker->companyEmail()
        ];
    }
}
