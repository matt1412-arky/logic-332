<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::with('variant.category')->get();
    }

    public function getById($id)
    {
        if (Product::where('id', $id)->exists()) {
            $product = Product::with('variant.category')->find($id);
            return response()->json($product, 200);
        }
    }


    public function simpan(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        if ($product = Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->variant_id = $request->variant_id;
            $product->initial = $request->initial;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->create_by = $request->create_by;
            $product->updated_by = $request->updated_by;
            $product->save();
            return response()->json($product, 200);
        }
    }

    public function delete($id)
    {
        if ($product = Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->delete();
            return response()->json(['message' => 'data berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'data tidak ditemukan'], 200);
        }
    }
}
