<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Pest\Laravel\json;

class GenreController extends Controller
{
    public function index() {
    $genres = Genre::all();

    if ($genres->isEmpty()) {
        return response()->json([
            "success" => false,
            "message" => "Resource Not Found",
        ], 200);
    }

    return response()->json([
        "success" => true,
        "message" => "Get All Genres with Books",
        "data" => $genres
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Genre Created Successfully',
        ], 201);
    }

    public function show(string $id) {
        $genres = Genre::find($id);

        if (!$genres) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'not detail resource',
            'data' => $genres
        ], 200);
    }


    public function update(string $id, Request $request){
        $genres = Genre::find($id);

        if (!$genres) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $genres->update($data);

        return response()->json([
            'success' => true,
            'message' => 'resource updated successfully',
            'data' => $genres
            ], 200);
    }
    public function destroy(string $id){
        $genres = Genre::find($id);

        if (!$genres) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        $genres->delete();

        return response()->json([
           'success' => true,
           'message' => 'resource deleted successfully'
        ]);
    }
}
