<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            Department::create([
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
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($department)
    {
        //
        $dep = Department::findOrFail($department);
        return view('department.edit', compact('dep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
        try {
            $dep = Department::findOrFail($department);
            $dep->update([
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
    public function destroy(Department $department)
    {
        //
    }
}
