<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return "Ini adalah kontroller produk.";
    }

    public function view(){
        return view('produk');
    }
}
