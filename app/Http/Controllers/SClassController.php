<?php

namespace App\Http\Controllers;

use App\Models\SClass;
use Illuminate\Http\Request;

class SClassController extends Controller
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
        return view('class/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            SClass::create([
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
    public function show(SClass $sClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($sClass)
    {
        //
        $class = SClass::findOrFail($sClass);
        return view('class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $sClass)
    {
        //
        try {
            $class = SClass::findOrFail($sClass);
            $class->update([
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
     * Remove the specified resource from storage.
     */
    public function destroy($sClass)
    {
        //
        try {
            $class = SClass::findOrFail($sClass);
            $class->delete();
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
