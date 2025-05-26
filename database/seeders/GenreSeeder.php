<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Action genre'

        ]);

        Genre::create([
            'name' => 'Adventure',
            'description' => 'Adventure genre'

        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'Comedy genre'

        ]);
    }
}
