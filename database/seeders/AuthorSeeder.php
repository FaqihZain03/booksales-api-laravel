<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::delete();

    Author::insert([
        ['name' => 'J.K. Rowling', 'email' => 'jkrowling@example.com', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'George Orwell', 'email' => 'gorwell@example.com', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Agatha Christie', 'email' => 'achristie@example.com', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Stephen King', 'email' => 'sking@example.com', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Isaac Asimov', 'email' => 'iasimov@example.com', 'created_at' => now(), 'updated_at' => now()],
    ]);
    }
}

