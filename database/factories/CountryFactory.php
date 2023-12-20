<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'iso3' => $this->faker->word(),
            'iso2' => $this->faker->word(),
            'phonecode' => $this->faker->word(),
            'capital' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'currency_symbol' => $this->faker->word(),
            'tld' => $this->faker->word(),
            'native' => $this->faker->word(),
            'region' => $this->faker->word(),
            'subregion' => $this->faker->word(),
            'timezones' => $this->faker->text(),
            'translations' => $this->faker->text(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'emoji' => $this->faker->text(),
            'emojiU' => $this->faker->text(),
            'flag' => $this->faker->boolean(),
            'wikiDataId' => $this->faker->text(),
        ];
    }
}
