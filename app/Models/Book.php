<?php

// app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   // Book.php
public function author()
{
    return $this->belongsTo(Author::class);
}

public function genre()
{
    return $this->belongsTo(Genre::class);
}

}
