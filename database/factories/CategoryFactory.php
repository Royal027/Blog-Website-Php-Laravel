<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'name'=> $name,
            'slug'=>Str::slug($name),
            'description' => $this->faker->text,
            'status' => $this->faker->boolean,
            'feature_status' => $this->faker->boolean,
            'order' => random_int(0,100),
            'seo_keywords' => Str::slug($this->faker->address ," , "),
            'seo_description' =>$this->faker->paragraph

        ];
    }
}
