<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            ['name' => 'Haircut',],
            ['name' => 'Dread',],
            ['name' => 'Pedicure Treatment',],
        ];

        $currentdata = $data[$this->index];

        $this->index++;

        return [
            'name' => $currentdata['name']
        ];
    }
}
