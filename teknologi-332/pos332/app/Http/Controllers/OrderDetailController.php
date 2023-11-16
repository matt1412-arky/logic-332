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
