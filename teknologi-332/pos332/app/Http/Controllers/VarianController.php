<?php

namespace App\Http\Controllers;

use App\Models\Varian;
use Illuminate\Http\Request;

class VarianController extends Controller
{
    public function index() {
        return Varian::with('category')->get();
    }

    public function getById($id) {
        if(Varian::where('id', $id)->exists()) {
            $varian = Varian::with('category')->find($id);
            return response()->json($varian, 200);
        }
    }

    public function getByCategoryId($catid) {
        if(Varian::where('category_id', $catid)->exists()) {
            $varian = Varian::where('category_id', $catid)->with('category')->get();
            return response()->json($varian, 200);
        }
    }

    public function simpan(Request $req) {
        $varian = Varian::create($req->all());
        return response()->json($varian, 201);
    }

    public function edit(Request $req, $id) {
        if($var = Varian::where('id', $id)->exists()) {
            $varian = Varian::find($id);
            $varian -> category_id = $req->category_id;
            $varian -> initial = $req->initial;
            $varian -> name = $req->name;
            $varian -> active = $req->active;
            $varian -> create_by = $req->create_by;
            $varian -> updated_by = $req->updated_by;
            $varian -> save();
            return response()->json($varian, 200);    
            
        }
        
    }

    public function hapus($id) {
        if($var = Varian::where('id', $id)->exists()) {
            $varian = Varian::find($id);
            $varian -> delete();
            return response()->json(["message" => "data berhasil dihapus"], 200);    
        } else {
            return response()->json(["message" => "data tidak ditemukan"], 200);
        }
    }
}
