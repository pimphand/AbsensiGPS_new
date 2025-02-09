<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApbDesRequest;
use App\Http\Requests\UpdateApbDesRequest;
use App\Models\ApbDes;

class ApbDesController extends Controller
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
    public function store(StoreApbDesRequest $request)
    {
        ApbDes::create($request->validated());

        return redirect()->route('idm.index', ['#tabs-apbdes-5'])->with('success', 'Data berhasil disimpan');
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
    public function show(ApbDes $apbDes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApbDes $apbDes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApbDesRequest $request, $apbDes)
    {
        $apbDes = ApbDes::find($apbDes);
        $apbDes->update($request->validated());
        return redirect()->route('idm.index', ['#tabs-apbdes-5'])->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($apbDes)
    {
        $apbDes = ApbDes::find($apbDes);
        $apbDes->delete();

        return redirect()->route('idm.index', ['#tabs-apbdes-5'])->with('success', 'Data berhasil dihapus');
    }
}
