<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAddressController extends Controller
{
    public function index() {
        $address = UserAddress::paginate(5);
        return view('address.index', ['address' => $address]);
    }

     public function form(Request $req) {
        return view('address.form');
    }


}
