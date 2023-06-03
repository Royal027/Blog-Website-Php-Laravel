<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
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
            'category_id' => random_int(1,10),
            'user_id' => random_int(1,10),
            'name' => $name,
            'slug'=>Str::slug($name),
            'body' => $this->faker->paragraph,
            'status' => $this->faker->boolean,
            'tags' => Str::slug($this->faker->address , ", "),
            'seo_keywords' => Str::slug($this->faker->address ," , "),
            'seo_description' =>$this->faker->text,
            'view_count' => random_int(0,100),
            'like_count' => random_int(0,100),
            'read_time' => random_int(0,2000),
            'publish_date' =>$this->faker->dateTime,



        ];
    }
}
