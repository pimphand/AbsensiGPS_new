<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::paginate(10);
        return view('dashboard.admin.banner.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validate = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'nullable',
        ]);

        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 422);
        }

        $image = Str::uuid() . '.' . $request->file('image')->getClientOriginalExtension();
        $folderPath = 'public/uploads/banner/';
        $request->file('image')->storeAs($folderPath, $image);

        Banner::create([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description ?? null,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'Banner berhasil disimpan'], 200);
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
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $validate = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'nullable',
        ]);

        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 422);
        }

        if ($request->hasFile('image')) {
            $image = Str::uuid() . '.' . $request->file('image')->getClientOriginalExtension();
            $folderPath = 'public/uploads/banner/';
            $request->file('image')->storeAs($folderPath, $image);

            // Delete old image
            if (file_exists(storage_path('app/public/uploads/banner/' . $banner->image))) {
                unlink(storage_path('app/public/uploads/banner/' . $banner->image));
            }

            $banner->update([
                'image' => $image,
                'title' => $request->title,
                'description' => $request->description ?? null,
            ]);
        } else {
            $banner->update([
                'title' => $request->title,
                'description' => $request->description ?? null,
            ]);
        }

        return response()->json(['success' => 'Banner Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return response()->json(['success' => 'Banner Deleted Successfully'], 200);
    }
}
