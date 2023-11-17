<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
    //     $product = DB::select("
    //     SELECT
    //     c.id AS category_id,
    //     c.name AS category_name,
    //     v.id AS varian_id,
    //     v.name AS varian_name,
    //     p.id,
    //     p.initial,
    //     p.name,
    //     p.description,
    //     p.price,
    //     p.stock
    //     FROM products p
    //     JOIN varians v ON p.varian_id=v.id
    //     JOIN categories c ON v.category_id=c.id
    // ");
    // return response()->json($product, 200);
        return Product::with('varian.category')->get();
    }

    public function getById($id) {
        if(Product::where('id', $id)->exists()) {
            // $product = DB::select("
            // SELECT
            // c.id AS category_id,
            // c.name AS category_name,
            // v.id AS varian_id,
            // v.name AS varian_name,
            // p.id,
            // p.initial,
            // p.name,
            // p.description,
            // p.price,
            // p.stock
            // FROM products p
            // JOIN varians v ON p.varian_id=v.id
            // JOIN categories c ON v.category_id=c.id
            // WHERE p.id = " . $id);
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

    public function reduceStock($id,$number) {
        if($pro = Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $before = $product['stock'];
            $after = $before-$number;
            print($after);
            Product::where('id','=',$id)->update(['stock'=>$after]);    
        }
        
    }

    public function increaseStock($id, $number) {
        if($pro = Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $before = $product['stock'];
            $after = $before+$number;
            print($after);
            Product::where('id','=',$id)->update(['stock'=>$after]);
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
