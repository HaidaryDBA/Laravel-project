<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(),
            "description" => fake() -> paragraph(),
            "isbn" => fake() ->unique() ->isbn13(), 
            "published_year" => fake() -> numberBetween(2000,2026),
            "author_id" => \App\Models\Author::factory(),
            "category_id" => \App\Models\Category::factory(),
        ];
    }
}
