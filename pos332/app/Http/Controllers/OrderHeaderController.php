<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;

class OrderHeaderController extends Controller
{
    public function index()
    {
        return OrderHeader::all();
    }
    public function simpan(Request $req)
    {
        $orderheader = OrderHeader::create($req->all());
        return response()->json($orderheader, 201);
    }

    public function getById($id)
    {
        if (OrderHeader::where('id', $id)->exists()) {
            $orderheader = OrderHeader::find($id);
            return response()->json($orderheader, 200);
        }
    }
    public function hapus($id)
    {
        if ($orderheader = OrderHeader::where('id', $id)->exists()) {
            $orderheader = OrderHeader::find($id);
            $orderheader->delete();
            return response()->json(["messege" => "data berhasil dihapus"], 200);
        } else {
            return response()->json(["messege" => "data tidak ditemukan"], 200);
        }
    }

    public function edit(Request $req, $id)
    {
        $orderheader = OrderHeader::find($id);
        $orderheader->update($req->all());
        return response()->json($orderheader, 200);
    }
}
