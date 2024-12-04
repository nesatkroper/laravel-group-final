<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            Major::create([
                'name' => $request->name,
                'code' => $request->code,
                'des' => $request->des,
            ]);

            return redirect()->route('cate.index')->with('create', 'Class created successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($major)
    {
        //
        $major = Major::findOrFail($major);
        return view('major.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $major)
    {
        //
        try {
            $maj = Major::findOrFail($major);
            $maj->update([
                'name' => $request->name,
                'code' => $request->code,
                'des' => $request->des,
            ]);
            return redirect()->route('cate.index')->with('create', 'Major created successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($major)
    {
        //
        try {
            $maj = Major::findOrFail($major);
            $maj->delete();

            return redirect()->back()->with('delete', 'Department deleted successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
