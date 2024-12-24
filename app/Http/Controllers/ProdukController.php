<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view(view: 'produk.index');
        
    }
    public function makanan()
    {
        return view('produk.makanan');
    }
    
    public function minuman()
    {
        return view('produk.minuman');
    }
}
