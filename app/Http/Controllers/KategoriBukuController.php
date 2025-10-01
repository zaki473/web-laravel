<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kategori_buku = KategoriBuku::all()->sortBy('kategori');
        $jumlah_data = $data_kategori_buku->count();
        return view('kategori-buku.tampil', ['KategoriBuku' => $data_kategori_buku, 'JumlahKategoriBuku' => $jumlah_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori-buku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:100',
        ]);

        $kategori = new KategoriBuku;
        $kategori->kategori = $validated['kategori'];
        $kategori->save();

        return redirect('/kategori-buku');
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
        $data_kategori_buku = KategoriBuku::find($id);
        return view('kategori-buku.edit', ['KategoriBuku' => $data_kategori_buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:100',
        ]);

        $kategori = KategoriBuku::find($id);
        if (! $kategori) {
            return redirect('/kategori-buku')->with('error', 'Data tidak ditemukan');
        }

        $kategori->kategori = $validated['kategori'];
        $kategori->save();

        return redirect('/kategori-buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = KategoriBuku::find($id);
        if ($kategori) {
            $kategori->delete();
        }
        return redirect('/kategori-buku');
    }
}
