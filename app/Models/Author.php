<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function allAuthors()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling'],
            ['id' => 2, 'name' => 'Agatha Christie'],
            ['id' => 3, 'name' => 'George R.R. Martin'],
            ['id' => 4, 'name' => 'Jane Austen'],
            ['id' => 5, 'name' => 'J.R.R. Tolkien'],
        ];
    }
}
