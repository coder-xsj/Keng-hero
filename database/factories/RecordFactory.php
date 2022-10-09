<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $record_images = [
            "https://sm.ms/image/uVQGH7hzCFSp419",
            "https://sm.ms/image/HibMZFzj7pthaxr",
        ];
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        return [
            'user_id' => 1,
            'title' => $this->faker->name(),
            'hero' => $this->faker->name(),
            'record' => $this->faker->address(),
            'record_image' => $this->faker->randomElement($record_images),
            'remarks' => $this->faker->sentence(),
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ];
    }
}
