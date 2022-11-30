<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'picture' => 'https://picsum.photos/200/200',
            'event_start' => now(),
            'event_end' => now(),
            'max_tickets' => rand(0, 100),
            'location' => Str::random(10),
            'price' => rand(10, 50),
            'description' => Str::random(100),
        ];
    }
}
