<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuRestController extends Controller
{
    public function parentMenu() {
        $menu = Menu::select('id', 'menu','link','role_id')
                    ->where('parent_id', 0)->get();
        return response()->json($menu, 200);
    }

    public function childMenu($parent_id) {
        $menu = Menu::select('id','parent_id', 'menu', 'link','role_id')
                    ->where('parent_id', $parent_id)->get();
        return response()->json($menu, 200);
    }
}
