<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varian;

class VarianController extends Controller
{
    public function index()
    {
        return Varian::with('category')->get();
    }
    public function getByID($id)
    {
        if (Varian::where('id', $id)->exists()) {
            $varian = Varian::find($id);
            return response()->json($varian, 200);
        }
    }
    public function getByCategoryId($cat_id)
    {
        if (Varian::where('category_id', $cat_id)->exists()) {
            $varian = Varian::where('category_id', $cat_id)->with('category')->get();
            return response()->json($varian, 200);
        }
    }
    public function simpan(Request $req)
    {
        $varian = Varian::create($req->all());
        return response()->json($varian, 201);
    }

    public function edit(Request $req, $id)
    {
        $var = Varian::find($id);
        $var->update($req->all());
        return response()->json($var, 200);
    }
    public function hapus($id)
    {
        if ($var = Varian::where('id', $id)->exists()) {
            $var = Varian::find($id);
            $var->delete();
            return response()->json(["messege" => "data berhasil dihapus"], 200);
        } else {
            return response()->json(["messege" => "data tidak ditemukan"], 200);
        }
    }
}
