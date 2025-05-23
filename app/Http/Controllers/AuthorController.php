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

    public function show(string $id) {
        $authors = Author::find($id);

        if (!$authors) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'not detail resource',
            'data' => $authors
        ], 200);
    }

    public function update(string $id, Request $request){
        $authors = Author::find($id);

        if (!$authors) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $data = [
            'name' => $request->name,
        ];

        $authors->update($data);

        return response()->json([
            'success' => true,
            'message' => 'resource updated successfully',
            'data' => $authors
        ], 200);
    }
    public function destroy(string $id){
        $authors = Author::find($id);

        if (!$authors) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        $authors->delete();

        return response()->json([
           'success' => true,
           'message' => 'resource deleted successfully'
        ]);
    }

}

