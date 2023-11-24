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

    public function form()
    {
        return view('cargo.form');
    }

    public function create(Request $request)
    {
        $cargo = new Cargo();
        $cargo->cargo = $request->cargo;
        $cargo->constmatl = $request->constmatl;
        $cargo->create_by = $request->create_by;
        $cargo->update_by = $request->update_by;
        $cargo->is_delete = false;
        $cargo->save();
        return redirect()->route('home.cargo');
    }

    public function edit($id)
    {
        $cargo = Cargo::where('id', $id)->get();
        return view('cargo.edit', ['cargo' => $cargo]);
    }

    public function update(Request $request)
    {
        $cargo = Cargo::find($request->id);
        $cargo->cargo = $request->cargo;
        $cargo->constmatl = $request->constmatl;
        $cargo->create_by = $request->create_by;
        $cargo->update_by = $request->update_by;
        $cargo->is_delete = false;
        $cargo->save();
        return redirect()->route('home.cargo');
    }

    public function deleteForm($id)
    {
        $cargo = Cargo::where('id', $id)->get();
        return view('cargo.delete', ['cargo' => $cargo]);
    }
    public function delete(Request $request)
    {
        $cargo = Cargo::where('id', $request->id)
            ->update([
                'is_delete' => true
            ]);
        return redirect()->route('home.cargo');
    }
}
