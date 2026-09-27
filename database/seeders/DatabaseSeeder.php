<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create users
        User::factory(5)->create();

        // Create authors and categories
        Author::factory(5)->create();
        Category::factory(5)->create();

        // Create books
        Book::factory(10)->create();

        // Create borrowings
        Borrowing::factory(5)->create();
    }
}