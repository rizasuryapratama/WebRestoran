<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = menu::select('*')
        ->get();
        return view('menu.index', ['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    
    public function simpanmenu(Request $request)
    {
        $menu = menu::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
        ]);
    
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    
    public function edit(string $id)
    {
        $menu = menu::select('*')
            ->where('id', $id)
            ->get();
            return view('menu.edit', ['menu' => $menu]);
    }


    public function updatemenu(Request $request, string $id)
    {
        $menu = menu::where('id', $request->id)
             ->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'kategori' => $request->kategori,
             ]);
   return redirect()->route('menu.index');
    }

    public function hapusmenu($id)
    {
    $menu = menu::where('id', $id)
        ->delete();

    return redirect()->route('menu.index');
}
}
