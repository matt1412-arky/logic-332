<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Models\Role;
use Illuminate\Http\Request;

class UserAddresController extends Controller
{
    public function index()
    {
        $addresses = UserAddress::paginate(5);
        return view('address.index', compact('addresses'));
    }

    public function form(Request $req)
    {
        return view('address.form');
    }
}
