<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VarianController extends Controller
{
    public function index()
    {
        return view('varian.index');
    }

    public function form()
    {
        return view('varian.form');
    }
}
