<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class ControllerBarang extends Controller
{
    public function index(){
    $data_barang = Barang::all();
    return view('barang.barang', compact('data_barang'));
    }
}
