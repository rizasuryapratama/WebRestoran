<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil kata kunci pencarian dari request
        $katakunci = $request->get('katakunci');

        // Query data kategori dengan filter berdasarkan kata kunci
        $kategori = Kategori::select('*')
            ->when($katakunci, function ($query, $katakunci) {
                return $query->where('namakategori', 'LIKE', '%' . $katakunci . '%');
            })
            ->get();

        // Return data ke view
        return view('kategori.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpankategori(Request $request)
    {
        $kategori = kategori::create([
            'namakategori' => $request->namakategori,
        ]);
        

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = kategori::select('*')
        ->where('id', $id)
        ->get();
        return view('kategori.edit', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatekategori(Request $request, string $id)
    {
        $kategori = kategori::where('id', $request->id)
        ->update([
               'namakategori' => $request->namakategori,
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuskategori(string $id)
    {
        $kategori = kategori::where('id', $id)
        ->delete();
        return redirect()->route('kategori.index'); 
    }
}
