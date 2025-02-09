<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateIdmRequest;
use App\Models\ApbDes;
use App\Models\Data;
use App\Models\Idm;
use Illuminate\Http\Request;

class IdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::where('code', 'data-penduduk')->first();
        $apbds = ApbDes::all();
        return view('dashboard.website.idm.index', compact('data', 'apbds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Data::updateOrCreate(
            ['code' => 'data-penduduk'],
            [
                'name' => 'Data Penduduk',
                'data' => [
                    'total_penduduk' => $request->total_penduduk,
                    'kepala_keluarga' => $request->kepala_keluarga,
                    'total_perempuan' => $request->total_perempuan,
                    'total_laki' => $request->total_laki,
                    //perkawinan
                    'kawin' => $request->kawin,
                    'belum_kawin' => $request->belum_kawin,
                    'cerai_mati' => $request->cerai_mati,
                    'cerai_hidup' => $request->cerai_hidup,
                    'kawin_tercatat' => $request->kawin_tercatat,
                    'kawin_tidak_tercatat' => $request->kawin_tidak_tercatat,
                    //pekerjaan
                    'belum_bekerja' => $request->belum_bekerja,
                    'karayawan_swasta' => $request->karayawan_swasta,
                    'buruh_harian_lepas' => $request->buruh_harian_lepas,
                    'mengurus_rumah_tangga' => $request->mengurus_rumah_tangga,
                    'pelajar_mahasiswa' => $request->pelajar_mahasiswa,
                    'petani_pekebun' => $request->petani_pekebun,
                    //agama
                    'islam' => $request->islam,
                    'kristen' => $request->kristen,
                    'katolik' => $request->katolik,
                    'hindu' => $request->hindu,
                    'buddha' => $request->buddha,
                    'konghucu' => $request->konghucu,
                    'kepercayaan_lainnya' => $request->kepercayaan_lainnya,
                ]
            ]
        );

        return redirect()->route('idm.index', ['#tabs-penduduk-5'])->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idm $idm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idm $idm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdmRequest $request, Idm $idm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idm $idm)
    {
        //
    }
}
