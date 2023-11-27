<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function index()
    {
        $addresses = UserAddress::paginate(5);
        return view('address.index', compact('addresses'));
    }

    public function form()
    {
        return view('address.form');
    }
}
