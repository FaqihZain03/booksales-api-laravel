<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            ['name' => 'J. R. R. Tolkien'],
            ['name' => 'J. K. Rowling'],
            ['name' => 'George R. R. Martin'],
            ['name' => 'Stephen King'],
            ['name' => 'Agatha Christie'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
