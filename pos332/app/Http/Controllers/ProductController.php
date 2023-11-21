<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // public function index()
    // {
    //     return Product::with('varian')->get();
    // }
    public function getByID($id)
    {
        if (Product::where('id', $id)->exists()) {
            $product = Product::with('varian.category')->find($id);
            return response()->json($product, 200);
        }
    }
    public function simpan(Request $req)
    {
        $product = Product::create($req->all());
        return response()->json($product, 201);
    }
    public function edit(Request $req, $id)
    {
        $pro = Product::find($id);
        $pro->update($req->all());
        return response()->json($pro, 200);
    }
    public function hapus($id)
    {
        if ($pro = Product::where('id', $id)->exists()) {
            $pro = Product::find($id);
            $pro->delete();
            return response()->json(["messege" => "data berhasil dihapus"], 200);
        } else {
            return response()->json(["messege" => "data tidak ditemukan"], 200);
        }
    }
    public function index()
    {
        return Product::with('varian.category')->get();
    }

    public function reduceStock($id, $number)
    {
        if ($product = Product::find($id)) {
            $product->decrement('stock', $number);
        }
    }

    public function increasesStock($id, $number)
    {
        if ($product = Product::find($id)) {
            $product->increment('stock', $number);
        }
    }

    public function search($textSearch){
        $product = DB::select("
            select * from products where
            name ilike '%".$textSearch."%' or description ilike '%".$textSearch."%'
        ");
        return response()->json($product);
    }
}
