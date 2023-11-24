<?php

namespace App\Http\Controllers;

use App\Models\Berth;
use Illuminate\Http\Request;

class BerthController extends Controller
{
    public function index()
    {
        $berth = Berth::where('is_delete', false)->paginate(5);
        return view('berth.index', ['berth' => $berth]);
    }

    public function form()
    {
        return view('berth.form');
    }

    public function create(Request $request)
    {
        $berth = new Berth();
        $berth->berth_no = $request->berth_no;
        $berth->length = $request->length;
        $berth->create_by = $request->create_by;
        $berth->update_by = $request->update_by;
        $berth->is_delete = false;
        $berth->save();
        return redirect()->route('home.berth');
    }

    public function edit($id)
    {
        $berth = Berth::where('id', $id)->get();
        return view('berth.edit', ['berth' => $berth]);
    }

    public function update(Request $request)
    {
        $berth = Berth::find($request->id);
        $berth->berth_no = $request->berth_no;
        $berth->length = $request->length;
        $berth->create_by = $request->create_by;
        $berth->update_by = $request->update_by;
        $berth->is_delete = false;
        $berth->save();
        return redirect()->route('home.berth');
    }

    public function deleteForm($id)
    {
        $berth = Berth::where('id', $id)->get();
        return view('berth.delete', ['berth' => $berth]);
    }
    public function delete(Request $request)
    {
        $berth = Berth::where('id', $request->id)
            ->update([
                'is_delete' => true
            ]);
        return redirect()->route('home.berth');
    }
}
