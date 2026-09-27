<?php

namespace Database\Factories;

use App\Models\Borrowing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Borrowing>
 */
class BorrowingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => \App\Models\User::factory(),
            "book_id" => \App\Models\Book::factory(),
            "borrowed_at" => fake()-> dateTimeBetween('2020-05-04', '2026-05-07'),
            "due_at" => fake() -> dateTimeBetween('2026-06-07', '2026-07-01'),
            "returned_at" => null,
        ];
    }
}
