<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Project;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'status' => $this->faker->randomElement(["draft","submit","approved","paid"]),
            'due_date' => $this->faker->dateTime(),
            'price' => $this->faker->numberBetween(-10000, 10000),
            'project_id' => Project::factory(),
        ];
    }
}
