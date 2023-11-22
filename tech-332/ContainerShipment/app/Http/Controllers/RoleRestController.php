<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleRestController extends Controller
{
    public function getAll()
    {
        $roles = Role::where('is_delete', false)->get();
        return response()->json($roles);
    }
}
