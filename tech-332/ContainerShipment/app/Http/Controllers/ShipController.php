<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShipController extends Controller
{
    public function index()
    {
        $ship = Ship::paginate(5);
        return view('ship.index', ['ship' => $ship]);
    }

    public function form()
    {
        return view('ship.form');
    }

    public function store(Request $request)
    {
        $ship = new Ship();
        $ship->ship_name = $request->ship_name;
        $ship->grt = $request->grt;
        $ship->nrt = $request->nrt;
        $ship->loa = $request->loa;
        $ship->create_by = $request->create_by;

        $file = $request->file('img');
        $ship->img = $file->getClientOriginalName();
        $upload = public_path() . '/support/photos';
        $file->move($upload, $file->getClientOriginalName());
        $ship->save();
        return redirect()->route('home.ship');
    }

    public function printPDF()
    {
        $ship = Ship::all();
        $pdf = PDF::loadview('ship/pdf', ['ship' => $ship]);
        return $pdf->download('ship-report');
    }

    public function sendTextEmail()
    {
        $data = ['name' => 'kirana cantiq'];
        Mail::send(['text' => 'ship.mail'], $data, function ($message) {
            $message->to('kiranamhrrr@gmail.com', 'kirana cantiq')
                ->subject('Email from batch 332');
            // $message->from('2019104547@alumni.kalbis.ac.id', 'matthew');
        });
        echo ('Text mail sent...');
    }
}
