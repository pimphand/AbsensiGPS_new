<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->orderBy('order')->get();
        return view('frontend.index',compact('banners'));
    }

    public function data(Request $request)
    {

        return response()->json(['message' => 'Data not found'], 404);
    }

}
