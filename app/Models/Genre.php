<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function allGenres()
    {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Non-Fiction'],
            ['id' => 3, 'name' => 'Mystery'],
            ['id' => 4, 'name' => 'Romance'],
            ['id' => 5, 'name' => 'Fantasy'],
        ];
    }
}
