<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Time>
 */

class TimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private $index = 0;

    public function definition(): array
    {
        $data = [
            ['time' => '8:00AM', 'available_for' => 'weekday'],
            ['time' => '8:30AM', 'available_for' => 'weekday'],
            ['time' => '9:00AM', 'available_for' => 'weekday'],
            ['time' => '9:30AM', 'available_for' => 'weekday'],
            ['time' => '10:00AM', 'available_for' => 'weekday'],
            ['time' => '10:30AM', 'available_for' => 'weekday'],
            ['time' => '11:00AM', 'available_for' => 'weekday'],
            ['time' => '11:30AM', 'available_for' => 'weekday'],
            ['time' => '12:00PM', 'available_for' => 'weekday'],
            ['time' => '12:30PM', 'available_for' => 'weekday'],
            ['time' => '1:00PM', 'available_for' => 'weekday'],
            ['time' => '1:30PM', 'available_for' => 'weekday'],
            ['time' => '2:00PM', 'available_for' => 'weekday'],
            ['time' => '2:30PM', 'available_for' => 'weekday'],
            ['time' => '3:00PM', 'available_for' => 'weekday'],
            ['time' => '3:30PM', 'available_for' => 'weekday'],
            ['time' => '4:00PM', 'available_for' => 'weekday'],
            ['time' => '4:30PM', 'available_for' => 'weekday'],
            ['time' => '5:00PM', 'available_for' => 'weekday'],
            ['time' => '5:30PM', 'available_for' => 'weekday'],
            ['time' => '6:00PM', 'available_for' => 'weekday'],
            ['time' => '6:30PM', 'available_for' => 'weekday'],
            ['time' => '7:00PM', 'available_for' => 'weekday'],
            ['time' => '7:30PM', 'available_for' => 'weekday'],
            ['time' => '8:00PM', 'available_for' => 'weekday'],
            ['time' => '8:30PM', 'available_for' => 'weekend'],
            ['time' => '9:00PM', 'available_for' => 'weekend'],
            ['time' => '9:30PM', 'available_for' => 'weekend'],
            ['time' => '10:00PM', 'available_for' => 'weekend'],
        ];

        $currentdata = $data[$this->index];

        $this->index++;

        return [
            'time' => $currentdata['time'],
            'available_for' => $currentdata['available_for']
        ];
    }
}
