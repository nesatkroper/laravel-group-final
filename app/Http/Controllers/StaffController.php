<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $staff = Staff::orderBy('created_at', 'desc')->get();
            return view('staffs.index', compact('staff'));
        } catch (\Exception $e) {
            dd($e);
        }
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
            $filename = null;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/staff/', $filename);
            }

            Staff::create([
                'image' => $filename,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'email' => $request->email,
                'department' => $request->department,
                'salary' => $request->salary,
                'address' => $request->address,
                'payment' => 'pending',
                'status' => 'active',
            ]);

            return redirect()->route('staff.index')->with('success', 'Staff created successfully');
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
    public function edit($staff)
    {
        //
        try {
            $staff = Staff::findOrFail($staff);
            return view('staffs.edit', compact('staff'));
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $staff)
    {
        //
        try {
            $staff = Staff::findOrFail($staff);
            $filename = $staff->image;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if (file_exists(public_path('uploads/staff/' . $staff->image)))
                    unlink(public_path('uploads/staff/' . $staff->image));

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/staff/', $filename);
            }

            $staff->update([
                'image' => $filename,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'email' => $request->email,
                'department' => $request->department,
                'salary' => $request->salary,
                'address' => $request->address,
                'payment' => 'pending',
                'status' => 'active',
            ]);

            return redirect()->route('staff.index')->with('success', 'Staff created successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($staff)
    {
        //
        try {
            $staff = Staff::findOrFail($staff);
            if (file_exists(public_path('uploads/staff/' . $staff->image)))
                unlink(public_path('uploads/staff/' . $staff->image));

            $staff->delete();

            return redirect()->back()->with('delete', 'Staff deleted successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
