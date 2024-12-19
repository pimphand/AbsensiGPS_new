<?php

namespace App\Http\Controllers;


use App\Models\Banner;
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
}
