<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
{
    $authors = Author::all();

    if ($authors->isEmpty()) {
        return response()->json([
            "success" => false,
            "message" => "Resource Not Found",
        ], 200);
    }

    return response()->json([
        "success" => true,
        "message" => "Get All Authors with Books",
        "data" => $authors
    ], );
}

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        Author::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author: Firstname Lastname Successfully',
        ], 201);
    }

}

