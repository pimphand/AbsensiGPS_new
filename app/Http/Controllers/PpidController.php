<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePpidRequest;
use App\Http\Requests\UpdatePpidRequest;
use App\Models\Ppid;
use Illuminate\Support\Str;

class PpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ppid::paginate(10);
        return view('dashboard.admin.ppid.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePpidRequest $request)
    {
        $image = Str::uuid() . '.' . $request->file('file')->getClientOriginalExtension();
        $folderPath = 'public/uploads/ppid/';
        $request->file('file')->storeAs($folderPath, $image);

        Ppid::create(array_merge($request->validated(), ['file' => $image]));

        return response()->json(['success' => 'PPID Created Successfully'], 200);
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
    public function show(Ppid $ppid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppid $ppid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePpidRequest $request, Ppid $ppid)
    {
        if ($request->hasFile('file')) {
            $image = Str::uuid() . '.' . $request->file('file')->getClientOriginalExtension();
            $folderPath = 'public/uploads/ppid/';
            $request->file('file')->storeAs($folderPath, $image);
            $ppid->update(array_merge($request->validated(), ['file' => $image]));
            return response()->json(['success' => 'PPID Updated Successfully'], 200);
        }

        $ppid->update($request->validated());

        return response()->json(['success' => 'PPID Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppid $ppid): \Illuminate\Http\JsonResponse
    {
        $ppid->delete();

        return response()->json(['success' => 'PPID Deleted Successfully'], 200);
    }
}
