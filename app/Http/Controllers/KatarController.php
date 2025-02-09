<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKatarRequest;
use App\Http\Requests\UpdateKatarRequest;
use App\Models\Katar;

class KatarController extends Controller
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
    public function store(StoreKatarRequest $request)
    {
        Katar::create($request->validated());

        return redirect()->route('idm.index', ['#tabs-katar-5'])->with('success', 'Data berhasil disimpan');

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
    public function show(Katar $katar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Katar $katar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKatarRequest $request, $id)
    {
        $katar = Katar::find($id);

        $katar->nama = $request->nama;
        $katar->alamat = $request->alamat;
        $katar->jabatan = $request->jabatan;
        $katar->save();
//        dd($katar);
        return redirect()->route('idm.index', ['#tabs-katar-5'])->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Katar $katar)
    {
        $katar->delete();

        return redirect()->route('idm.index', ['#tabs-katar-5'])->with('success', 'Data berhasil dihapus');
    }
}
