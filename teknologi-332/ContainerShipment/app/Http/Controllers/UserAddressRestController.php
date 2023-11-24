<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAddressRestController extends Controller
{
    
    public function create(Request $req, $user_id) {
        $user = new UserAddress;
        $user->user_id = $user_id;
        $user->street= $req -> street;
        $user->address = $req -> address;
        $user->save();
        return response()->json($user, 201);
    }
}
