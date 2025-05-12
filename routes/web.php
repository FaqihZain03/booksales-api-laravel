<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreAuthorController;

Route::get('/genre-authors', [GenreAuthorController::class, 'index']);

