<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
use App\Models\Team;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'position' => $this->faker->word(),
            'department_id' => Department::factory(),
            'team_id' => Team::factory(),
            'salary' => $this->faker->numberBetween(-10000, 10000),
            'hire_date' => $this->faker->dateTime(),
            'state_id' => State::factory(),
            'city_id' => City::factory(),
            'country_id' => Country::factory(),
        ];
    }
}
