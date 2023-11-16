<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return Product::with('varian.category')->get();
    }

    public function getById($id) {
        if(Product::where('id', $id)->exists()) {
            $product = Product::with('varian.category')->find($id);
            return response()->json($product, 200);
        }
    }

    public function simpan(Request $req) {
        $product = Product::create($req->all());
        return response()->json($product, 201);
    }

    public function edit(Request $req, $id) {
        if($pro = Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product -> varian_id = $req->varian_id;
            $product -> initial = $req->initial;
            $product -> name = $req->name;
            $product -> description = $req->description;
            $product -> price = $req -> price;
            $product -> stock = $req -> stock;
            $product -> create_by = $req->create_by;
            $product -> updated_by = $req->updated_by;
            $product -> save();
            return response()->json($product, 200);    
            
        }
        
    }

    public function hapus($id) {
        if($pro = Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product -> delete();
            return response()->json(["message" => "data berhasil dihapus"], 200);    
        } else {
            return response()->json(["message" => "data tidak ditemukan"], 200);
        }
    }
}
