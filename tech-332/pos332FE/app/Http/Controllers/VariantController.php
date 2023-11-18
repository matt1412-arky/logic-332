<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        return view('variant.index');
    }

    public function create()
    {
        return view('variant.form');
    }
}
