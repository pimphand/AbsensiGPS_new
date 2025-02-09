<?php

namespace App\Http\Controllers;

use App\Models\Pkk;
use Illuminate\Http\Request;

class PkkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pkk::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'kelompok' => $request->kelompok,
        ]);

        return redirect()->route('idm.index', ['#tabs-pkk-5'])->with('success', 'Data berhasil disimpan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pkk = Pkk::find($id);
        $pkk->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'kelompok' => $request->kelompok,
        ]);

        return redirect()->route('idm.index', ['#tabs-pkk-5'])->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pkk::destroy($id);

        return redirect()->route('idm.index', ['#tabs-pkk-5'])->with('success', 'Data berhasil dihapus');
    }
}
