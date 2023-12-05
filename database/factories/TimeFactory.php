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
            ['time' => '8:00AM','hour' => '08:00', 'available_for' => 'weekday'],
            ['time' => '8:30AM', 'hour' => '08:30', 'available_for' => 'weekday'],
            ['time' => '9:00AM', 'hour' => '09:00', 'available_for' => 'weekday'],
            ['time' => '9:30AM', 'hour' => '09:30', 'available_for' => 'weekday'],
            ['time' => '10:00AM', 'hour' => '10:00', 'available_for' => 'weekday'],
            ['time' => '10:30AM', 'hour' => '10:30', 'available_for' => 'weekday'],
            ['time' => '11:00AM', 'hour' => '11:00', 'available_for' => 'weekday'],
            ['time' => '11:30AM','hour' => '11:30', 'available_for' => 'weekday'],
            ['time' => '12:00PM','hour' => '12:00', 'available_for' => 'weekday'],
            ['time' => '12:30PM','hour' => '12:30', 'available_for' => 'weekday'],
            ['time' => '1:00PM', 'hour' => '13:00', 'available_for' => 'weekday'],
            ['time' => '1:30PM', 'hour' => '13:30', 'available_for' => 'weekday'],
            ['time' => '2:00PM', 'hour' => '14:00', 'available_for' => 'weekday'],
            ['time' => '2:30PM', 'hour' => '14:30', 'available_for' => 'weekday'],
            ['time' => '3:00PM', 'hour' => '15:00', 'available_for' => 'weekday'],
            ['time' => '3:30PM', 'hour' => '15:30', 'available_for' => 'weekday'],
            ['time' => '4:00PM', 'hour' => '16:00', 'available_for' => 'weekday'],
            ['time' => '4:30PM', 'hour' => '16:30', 'available_for' => 'weekday'],
            ['time' => '5:00PM', 'hour' => '17:00', 'available_for' => 'weekday'],
            ['time' => '5:30PM', 'hour' => '17:30', 'available_for' => 'weekday'],
            ['time' => '6:00PM', 'hour' => '18:00', 'available_for' => 'weekday'],
            ['time' => '6:30PM', 'hour' => '18:30', 'available_for' => 'weekday'],
            ['time' => '7:00PM', 'hour' => '19:00', 'available_for' => 'weekday'],
            ['time' => '7:30PM', 'hour' => '19:30', 'available_for' => 'weekday'],
            ['time' => '8:00PM', 'hour' => '20:00', 'available_for' => 'weekday'],
            ['time' => '8:30PM', 'hour' => '20:30', 'available_for' => 'weekend'],
            ['time' => '9:00PM', 'hour' => '21:00', 'available_for' => 'weekend'],
            ['time' => '9:30PM', 'hour' => '21:30', 'available_for' => 'weekend'],
            ['time' => '10:00PM', 'hour' => '22:00', 'available_for' => 'weekend'],
        ];

        $currentdata = $data[$this->index];

        $this->index++;

        return [
            'time' => $currentdata['time'],
            'hour_time' => $currentdata['hour'],
            'available_for' => $currentdata['available_for']
        ];
    }
}

the times table stores the available times for booking with contains a time from 8:00am to 10:00pm, where the time sequence is 8:00am, 8:30am, 9:00am, 9:30am etc to 10:00pm. This time sequence is applicable for  friday to sunday, but for monday to thursday the booking time should begin from 9:00am and end 8:00pm. how can i implement this using the function above
