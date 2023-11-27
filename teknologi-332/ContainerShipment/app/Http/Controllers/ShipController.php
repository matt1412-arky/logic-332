<?php

namespace App\Http\Controllers;

use App\Models\Ship;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShipController extends Controller
{
    public function index() {
        $ship = Ship::where('is_delete',false)->paginate(5);
        return view('ship.index', ['ship' => $ship]);
    }

    public function form() {
        return view('ship.form');
    }

    public function store(Request $req) {
        $ship = new Ship;
        $ship->ship_name = $req -> ship_name;
        $ship->grt = $req -> grt;
        $ship->nrt = $req -> nrt;
        $ship->loa = $req -> loa;
        $ship->create_by = 1;
        $ship->update_by = 1;
        
        $file = $req->file('image');
        $ship->image = $file ->getClientOriginalName();
        $uploaded_folder = public_path().'/photos';
        $file->move($uploaded_folder, $file->getClientOriginalName());

        $ship->save();

        return redirect('/ship');
    }

    public function printPDF() {
        $ship = Ship::all();
        $pdf = FacadePdf::loadView('ship/pdf', ['ship' => $ship]);
        return $pdf->download('ship-report');
    }

    public function sendTextEmail() {
        $data = ['name' => 'ismailnursidiq'];
        Mail::send(['text' => 'ship.mail'], $data, function($message) {
            $message->to ('ismailnursidiq@gmail.com', 'ismailnursidiq')
                    ->subject('Email from batch 332');
            // $message->from('icokbulaho@gmail.com', 'icokbulaho');
        });
        echo('Text mail sent ...');
    }
    
}
