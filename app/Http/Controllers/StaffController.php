<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $staff = Staff::all();
        return view('staffs.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/staff/', $filename);

                $img = ImageManager::imagick()->read($file);
                $img->resize(300, 300);

                $staffs = Staff::create([
                    'name' => $request->name,
                    'photo' => $filename,
                ]);


                if ($staffs) {
                    return redirect()->route('staff.index')->with('success', 'Staff created successfully');
                } else return;
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}