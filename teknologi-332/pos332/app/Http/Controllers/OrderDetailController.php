<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index() {
        return OrderDetail::with('OrderHeader','Product')->get();
    }

    public function getById($id) {
        if(OrderDetail::where('id', $id)->exists()) {
            $OrderDetail = OrderDetail::find($id);
            return response()->json($OrderDetail, 200);
        }
    }

    public function getByHeaderId($hid) {
        if(OrderDetail::where('header_id', $hid)->exists()) {
            $OrderDetail = OrderDetail::where('header_id', $hid)->get();
            return response()->json($OrderDetail, 200);
        }
    }

    public function simpan(Request $req) {
        $orderdetail = OrderDetail::create($req->all());
        return response()->json($orderdetail, 201);
    }

    public function hapus($id) {
        if($OrderDetail = OrderDetail::where('id', $id)->exists()) {
            $OrderDetail = OrderDetail::find($id);
            $OrderDetail -> delete();
            return response()->json(["message" => "data berhasil dihapus"], 200);    
        } else {
            return response()->json(["message" => "data tidak ditemukan"], 200);
        }
    }

}
