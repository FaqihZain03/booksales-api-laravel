<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200);
    }
}
