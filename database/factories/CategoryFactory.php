<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */



    public function definition()
    {
        return [
            'category_name' => $this->faker->name(),
            'parent_id' => Category::count() ? Category::pluck('id')->random() : null,
        ];
    }
}
