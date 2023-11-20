<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;

class OrderHeaderController extends Controller
{
    public function getById($id) {
        if(OrderHeader::where('id', $id)->exists()) {
            $orderheader = OrderHeader::find($id);
            return response()->json($orderheader, 200);
        }
    }

    public function simpan(Request $req) {
        $orderheader = OrderHeader::create($req->all());
        return response()->json($orderheader, 201);
    }

    public function edit(Request $req, $id) {
        if($orderheader = OrderHeader::where('id', $id)->exists()) {
            $orderheader = OrderHeader::find($id);
            $orderheader -> reference = $req->reference;
            $orderheader -> amount = $req->amount;
            $orderheader -> create_by = $req->create_by;
            $orderheader -> updated_by = $req->updated_by;
            $orderheader -> save();
            return response()->json($orderheader, 200);    
            
        }
        
    }

}
