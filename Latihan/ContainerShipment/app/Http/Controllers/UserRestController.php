<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRestController extends Controller
{
    public function simpan(Request $req){
        $user = User::create($req->all());
        return response()-> json($user,201);
    }
}
