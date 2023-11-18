<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;

class OrderHeaderController extends Controller
{
    public function getById($id)
    {
        if (OrderHeader::where('id', $id)->exists()) {
            $orderHeader = OrderHeader::find($id);
            return response()->json($orderHeader, 200);
        }
    }


    public function simpan(Request $request)
    {
        $orderHeader = OrderHeader::create($request->all());
        return response()->json($orderHeader, 201);
    }
}
