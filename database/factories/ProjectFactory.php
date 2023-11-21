<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Project;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->randomElement(["draft","in_progres","in_review","done"]),
            'start_date' => $this->faker->dateTime(),
            'finish_date' => $this->faker->dateTime(),
            'client_id' => Client::factory(),
        ];
    }
}
