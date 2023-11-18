<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        return Variant::with('category')->get();
    }

    public function getById($id)
    {
        if (Variant::where('id', $id)->exists()) {
            $variant = Variant::with('category')->find($id);
            return response()->json($variant, 200);
        }
    }

    public function getByCatId($cat_id)
    {
        if (Variant::where('category_id', $cat_id)->exists()) {
            $variant = Variant::where('category_id', $cat_id)->with('category')->get();
            return response()->json($variant, 200);
        }
    }

    public function simpan(Request $request)
    {
        $variant = Variant::create($request->all());
        return response()->json($variant, 201);
    }

    public function update(Request $request, $id)
    {
        if ($variant = Variant::where('id', $id)->exists()) {
            $variant = Variant::find($id);
            $variant->category_id = $request->category_id;
            $variant->initial = $request->initial;
            $variant->name = $request->name;
            $variant->active = $request->active;
            $variant->create_by = $request->create_by;
            $variant->updated_by = $request->updated_by;
            $variant->save();
            return response()->json($variant, 200);
        }
    }

    public function delete($id)
    {
        if ($variant = Variant::where('id', $id)->exists()) {
            $variant = Variant::find($id);
            $variant->delete();
            return response()->json(['message' => 'data berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'data tidak ditemukan'], 200);
        }
    }
}
