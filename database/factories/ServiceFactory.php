<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            ['category_id' => 1, 'name' => 'Hair cut without shaving', 'price' => 5000.00],
            ['category_id' => 1, 'name' => 'Hair cut with shaving', 'price' => 7500.00],
            ['category_id' => 1, 'name' => 'Kids haircut', 'price' => 1500.00],
            ['category_id' => 1, 'name' => 'Hair coloring black + treatment', 'price' => 8500.00],
            ['category_id' => 1, 'name' => 'Any other color dye + hair treatment', 'price' => 12350.00],
            ['category_id' => 2, 'name' => 'Dread lock treating hair', 'price' => 10000.00],
            ['category_id' => 2, 'name' => 'Brand new dread locking', 'price' => 50000.00],
            ['category_id' => 2, 'name' => 'Restyling/Relocking', 'price' => 30000.00],
            ['category_id' => 2, 'name' => 'Dread lock repair', 'price' => 15000.00],
            ['category_id' => 2, 'name' => 'Dread lock change color', 'price' => 20000.00],
            ['category_id' => 3, 'name' => 'Plus Package Pedicure treatment', 'price' => 9500.00],
            // ['category_id' => 3, 'name' => 'Relocking', 'price' => 30000.00],
          
         
        ];

        $currentdata = $data[$this->index];

        $this->index++;


        return [
            'category_id' => $currentdata['category_id'],
            'name' => $currentdata['name'],
            'price' => $currentdata['price']
        ];
    }
}
