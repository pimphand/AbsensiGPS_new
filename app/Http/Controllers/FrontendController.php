<?php

namespace App\Http\Controllers;


use App\Models\ApbDes;
use App\Models\Banner;
use App\Models\Data;
use App\Models\Ppid;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->orderBy('order')->get();
        return view('frontend.index', compact('banners'));
    }

    public function data(Request $request)
    {

        return response()->json(['message' => 'Data not found'], 404);
    }


    public function ppid(Request $request)
    {
        $data = Ppid::orderBy('created_at', 'desc')->paginate(8);
        return view('frontend.ppid', compact('data'));
    }

    public function downloadPpid(Request $request, $id)
    {
        $ppid = Ppid::find($id);;
        if (!$request->detail) {
            $ppid->increment('total_view');
            $ppid->save();
        }
        return [
            'file' => 'storage/uploads/ppid/' . $ppid->file,
            'total_view' => $ppid->total_view
        ];
    }

    public function profile()
    {
        $data = Data::where('code', 'profile-desa')->first();
        return view('frontend.profile', compact('data'));
    }

    public function idm()
    {
        $data = Data::where('code', 'profile-desa')->first();
        return view('frontend.idm', compact('data'));
    }

    public function apbd(Request $request)
    {
        $data = ApbDes::when($request->tahun, function ($query) {
            return $query->where('tahun', request('tahun'));
        })->first();
        $tahun = ApbDes::distinct()->get('tahun');
        return view('components.infografis.apbd', compact('data', 'tahun'));
    }

    public function pkk()
    {
        return view('frontend.pkk');
    }

    public function lpmd()
    {
        return view('frontend.lpmd');
    }

    public function karangtaruna()
    {
        return view('frontend.karangtaruna');
    }
}
