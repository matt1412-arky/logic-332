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

    public function simpan(Request $req)
    {
        $category = Category::create($req->all());
        return response()->json($category, 201);
    }

    // public function edit(Request $req, $id)
    // {
    //     $cat = Category::find($id);
    //     $cat->update($req->all());
    //     return response()->json($cat, 200);
    // }

    public function getByID($id){
        if (Category::where('id', $id)->exists()) {
            $category = Category::find($id);
            return response()->json($category,200);
        }
    }
    public function edit(Request $req, $id)
    {
        if ($cat = Category::where('id', $id)->exists()) {
            $category = Category::find($id);
            $category->initial = $req->initial;
            $category->name = $req->name;
            $category->active = $req->active;
            $category->create_by = $req->create_by;
            $category->updated_by = $req->updated_by;
            $category->save();
            return response()->json($category, 200);
        }
    }
    public function hapus($id){
        if($cat = Category::where('id',$id)->exists()){
            $category = Category::find($id);
            $category->delete();
            return response()->json(["messege"=>"data berhasil dihapus"],200);
        }else{
            return response()->json(["messege"=>"data tidak ditemukan"],200);
        }
    }
}
