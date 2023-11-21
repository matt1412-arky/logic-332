<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\OrderHeader;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        return OrderDetail::with('orderheader', 'product')->get();
    }
    public function simpan(Request $req)
    {
        $orderdetail = OrderDetail::create($req->all());
        // $product = Product::find($req->product_id);
        // $product->stock = $product->stock - $req->quantity;
        // $product->save();
        return response()->json($orderdetail, 201);
    }

    public function getById($id)
    {
        if (OrderDetail::where('id', $id)->exists()) {
            $orderdetail = OrderDetail::with('orderheader', 'product')->find($id);
            return response()->json($orderdetail, 200);
        }
    }
    public function getByHeaderId($hid)
    {
        if (OrderDetail::where('header_id', $hid)->exists()) {
            $orderdetail = OrderDetail::where('header_id', $hid)->get();
            return response()->json($orderdetail, 200);
        }
    }
    public function hapus($id)
    {
        if ($orderdetail = OrderDetail::where('id', $id)->exists()) {
            $orderdetail = OrderDetail::find($id);
            $orderdetail->delete();
            return response()->json(["messege" => "data berhasil dihapus"], 200);
        } else {
            return response()->json(["messege" => "data tidak ditemukan"], 200);
        }
    }
}
