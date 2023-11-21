<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        return OrderDetail::with('orderheader', 'product')->get();
    }

    public function getById($id)
    {
        if (OrderDetail::where('id', $id)->exists()) {
            $orderDetail = OrderDetail::with('orderheader', 'product')->find($id);
            return response()->json($orderDetail, 200);
        }
    }

    public function getByHeaderId($id)
    {
        if (OrderDetail::where('header_id', $id)->exists()) {
            $orderDetail = OrderDetail::where('header_id', $id)->get();
            return response()->json($orderDetail, 200);
        }
    }

    public function simpan(Request $request)
    {
        $orderDetail = OrderDetail::create($request->all());
        return response()->json($orderDetail, 201);
    }

    public function delete($id)
    {
        if ($orderDetail = OrderDetail::where('id', $id)->exists()) {
            $orderDetail = OrderDetail::find($id);
            $orderDetail->delete();
            return response()->json(['message' => 'data berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'data tidak ditemukan'], 200);
        }
    }
}
