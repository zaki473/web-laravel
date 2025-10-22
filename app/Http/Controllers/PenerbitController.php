<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Models\Telepon;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil Penerbit beserta relasi Telepon
        $data_penerbit = Penerbit::with('telepon')->get();
        $jumlah_data = $data_penerbit->count();

        return view('penerbit.tampil', ['PenerbitBuku' => $data_penerbit,
            'JumlahPenerbitBuku' => $jumlah_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $penerbit = Penerbit::create($input);
        $telepon = new Telepon;
        $telepon->telepon = $request->no_telp;
        $penerbit->telepon()->save($telepon);

        return redirect('/penerbit');
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
        $data_penerbit = Penerbit::find($id);

        return view('penerbit.edit', ['PenerbitBuku' => $data_penerbit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penerbit = Penerbit::find($id);
        $input = $request->all();
        $penerbit->update($input);
        $telepon = $penerbit->telepon;
        $telepon->telepon = $request->no_telp;
        $penerbit->telepon()->save($telepon);

        return redirect('/penerbit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit->delete();

        return redirect('/penerbit');
    }
}
