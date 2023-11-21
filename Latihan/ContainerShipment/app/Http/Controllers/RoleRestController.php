<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleRestController extends Controller
{
    public function getAll()
    {
        $role = Role::where('is_delete', false)->get();
        return response()->json($role);
    }
}
