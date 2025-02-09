<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class ProfileDesaController extends Controller
{
    public function index()
    {
        $data = Data::where('code', 'profile-desa')->first();
        return view('dashboard.website.profile-desa.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Data::where('code', 'profile-desa')->first();
        Data::updateOrCreate(
            ['code' => 'profile-desa'],
            [
                'name' => 'Profile Desa',
                'data' => [
                    'nama' => $request->input('nama'),
                    'alamat' => $request->input('alamat'),
                    'deskripsi' => $request->input('deskripsi'),
                    'visi' => $request->input('visi'),
                    'misi' => $request->input('misi'),
                    'logo' => $request->hasFile('logo')
                        ? $request->file('logo')->store('profile-desa', 'public')
                        : optional($data)->data['logo'] ?? null,
                    'struktur_organisasi' => $request->hasFile('struktur_organisasi')
                        ? $request->file('struktur_organisasi')->store('profile-desa', 'public')
                        : optional($data)->data['struktur_organisasi'] ?? null,
                    'struktur_permusyawaratan' => $request->hasFile('struktur_permusyawaratan')
                        ? $request->file('struktur_permusyawaratan')->store('profile-desa', 'public')
                        : optional($data)->data['struktur_permusyawaratan'] ?? null,
                ]
            ]
        );

        return redirect()->route('profile-desa.index')->with('success', 'Data berhasil disimpan');
    }

}
