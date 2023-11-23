<?php

namespace App\Http\Controllers;

use App\Models\Berth;
use Illuminate\Http\Request;

class BerthController extends Controller
{
    public function index () {
        $berth = Berth::where('is_delete',false)->get();
        return view('berth.index', ['berth' => $berth]);
    }

    public function form(Request $req) {
        return view('berth.form');
    }

    public function create(Request $req) {
        $berth = new Berth;
        $berth->berth_no = $req -> berth_no;
        $berth->length = $req -> length;
        $berth->create_by = 1;
        $berth->update_by = 1;
        $berth->is_delete = false;
        $berth->save();
        return redirect('/berth');
    }

    public function editForm($id) {
        $berth = Berth::where('id', $id)->get();
        return view('berth.editform', ['berth' => $berth]);
    }

    public function editSave(Request $req, $id) {
        $berth = Berth::find($id);
        $berth->berth_no = $req -> berth_no;
        $berth->length = $req -> length;
        $berth->create_by = 1;
        $berth->update_by = 1;
        $berth->is_delete = false;
        $berth->save();
        return redirect('/berth');
    }

    public function deleteForm($id) {
        $berth = Berth::where('id', $id)->get();
        return view('berth.deleteform', ['berth' => $berth]);
    }
    
    public function delete(Request $req) {
        $berth = Berth::where('id', $req->id)
                ->update(['is_delete' => true]);
        return redirect('/berth');
    }

}
