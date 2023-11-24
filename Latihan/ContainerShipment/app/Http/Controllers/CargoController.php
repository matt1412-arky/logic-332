<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargo = Cargo::where('is_delete', false)->paginate(5);
        return view('cargo.index', ['cargo' => $cargo]);
    }

    public function form(Request $req)
    {
        return view('cargo.form');
    }

    public function create(Request $req)
    {
        $cargo = new Cargo();
        $cargo->cargo = $req->cargo;
        $cargo->constmatl = $req->constmatl;
        $cargo->create_by = $req->create_by;
        $cargo->update_by = $req->update_by;
        $cargo->is_delete = false;
        $cargo->save();
        return redirect("/cargo");
    }

    public function editForm($id)
    {
        $cargo = Cargo::where('id', $id)->get();
        return view('cargo.editForm', ['cargo' => $cargo]);
    }

    public function editSave(Request $req, $id)
    {
        $cargo = Cargo::find($id);
        $cargo->cargo = $req->cargo;
        $cargo->constmatl = $req->constmatl;
        $cargo->create_by = $req->create_by;
        $cargo->update_by = $req->update_by;
        $cargo->is_delete = false;
        $cargo->save();
        return redirect("/cargo");
    }

    public function deleteForm($id)
    {
        $cargo = Cargo::where('id', $id)->get();
        return view('cargo.deleteForm', ['cargo' => $cargo]);
    }

    public function delete(Request $req)
    {
        $cargo = Cargo::where('id', $req->id)->update(['is_delete' => true]);
        return redirect('/cargo');
    }
}
