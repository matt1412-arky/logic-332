<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRestController extends Controller
{
    public function simpan(Request $req) {
        $user = User::create($req->all());
        return response()->json($user, 201);
    }

    public function create(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = hash('sha256',$req->password);
        $user->role_id = $req->role_id;
        $user->create_by = $req->create_by;
        $user->save();
        return response()->json($user, 201);
    }

    public function login(Request $req) {
        $user = User::select('id', 'name', 'email', 'role_id')
                    ->where('email', $req->email)
                    ->where('password', hash('sha256', $req->password))
                    ->get();
        return response()->json($user, 200);

    }

}
