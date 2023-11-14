<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function simpan(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
        if ($category = Category::where('id', $id)->exists()) {
            $category = Category::find($id);
            $category->initial = $request->initial;
            $category->name = $request->name;
            $category->active = $request->active;
            $category->create_by = $request->create_by;
            $category->updated_by = $request->updated_by;
            $category->save();
            return response()->json($category, 200);
        }
    }

    public function delete($id)
    {
        if ($category = Category::where('id', $id)->exists()) {
            $category = Category::find($id);
            $category->delete();
            return response()->json(['message' => 'data berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'data tidak ditemukan'], 200);
        }
    }
}
