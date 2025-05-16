<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::insert([
            ['title' => 'Harry Potter', 'author_id' => 1, 'published_year' => 1997, 'created_at' => now(), 'updated_at' => now()],
            ['title' => '1984', 'author_id' => 2, 'published_year' => 1949, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Murder on the Orient Express', 'author_id' => 3, 'published_year' => 1934, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'The Shining', 'author_id' => 4, 'published_year' => 1977, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Foundation', 'author_id' => 5, 'published_year' => 1951, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
