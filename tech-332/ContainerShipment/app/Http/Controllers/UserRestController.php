<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRestController extends Controller
{
    public function simpan(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('sha256', $request->password);
        $user->role_id = $request->role_id;
        $user->create_by = $request->create_by;
        $user->created_at = now();
        $user->save();
        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $user = User::select('id', 'name', 'email', 'role_id')
            ->where('email', $request->email)
            ->where('password', hash('sha256', $request->password))
            ->get();
        return response()->json($user, 200);
    }
}
