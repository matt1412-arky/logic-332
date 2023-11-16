<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswasController extends Controller
{
    public function index() {
    $mhs = mahasiswa::all();

    return view('mahasiswa/index',['mahasiswa'=>$mhs]);
    }
}
