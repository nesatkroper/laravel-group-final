<?php

namespace App\Http\Controllers;

use App\Models\StudentPrimaryInfo;
use Illuminate\Http\Request;

class StudentPrimaryInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = StudentPrimaryInfo::with('studentSecondaryInfo')->get();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
        }
        $students = StudentPrimaryInfo::create([
            // 'image',
            // 'kh_fname',
            // 'kh_lname',
            // 'en_fname',
            // 'en_lname',
            // 'gender',
            // 'degree_type',
            // 'dob',
            // 'phone',
            // 'email',
            // 'subject',
            // 'annual',
            // 'village',
            // 'commune',
            // 'district',
            // 'province',
            // 'grade',
            // 'graded_year',
            // 'graded_level',
            // 'class',
            // 'payment',
            // 'status',
        ]);
        dd($students);
        return redirect()->route('students.index')->with('create', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentPrimaryInfo $studentPrimaryInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentPrimaryInfo $studentPrimaryInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentPrimaryInfo $studentPrimaryInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentPrimaryInfo $studentPrimaryInfo)
    {
        //
    }
}
