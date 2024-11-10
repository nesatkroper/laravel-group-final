<?php

namespace App\Http\Controllers;

use App\Models\SClass;
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
        try {
            $students = StudentPrimaryInfo::with('studentSecondaryInfo')->orderBy('created_at', 'desc')->get();

            return view('students.index', compact('students'));
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
        $class = SClass::all();
        return view('students.create', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  !
        try {
            $fileName = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('uploads/student/', $fileName);
            }
            StudentPrimaryInfo::create([
                'image' => $fileName,
                'kh_fname' => $request->kh_fname,
                'kh_lname' => $request->kh_lname,
                'en_fname' => $request->en_fname,
                'en_lname' => $request->en_lname,
                'gender' => $request->gender,
                'degree_type' => $request->degree_type,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'annual' => $request->annual,
                'village' => $request->village,
                'commune' => $request->commune,
                'district' => $request->district,
                'province' => $request->province,
                'grade' => $request->grade,
                'graded_year' => $request->graded_year,
                'graded_level' => $request->graded_level,
                'class' => $request->class,
                'payment' => $request->payment,
                'status' => 'active',
            ]);
            dd($fileName);
            return redirect()->route('student.index')->with('create', 'Student created successfully');
        } catch (\Exception $e) {
            dd($e);
        }
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
    public function edit($studentPrimaryInfo)
    {
        //
        try {
            $student = StudentPrimaryInfo::findOrFail($studentPrimaryInfo);
            return view('students.edit', compact('student'));
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $studentPrimaryInfo)
    {
        //
        try {
            $student = StudentPrimaryInfo::findOrFail($studentPrimaryInfo);

            $fileName = $student->image;
            if ($request->hasFile('image')) {
                if ($student->image)
                    unlink(public_path('uploads/student/' . $student->image));

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('uploads/student/', $fileName);
            }

            $student->update([
                'image' => $fileName,
                'kh_fname' => $request->kh_fname,
                'kh_lname' => $request->kh_lname,
                'en_fname' => $request->en_fname,
                'en_lname' => $request->en_lname,
                'gender' => $request->gender,
                'degree_type' => $request->degree_type,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'annual' => $request->annual,
                'village' => $request->village,
                'commune' => $request->commune,
                'district' => $request->district,
                'province' => $request->province,
                'grade' => $request->grade,
                'graded_year' => $request->graded_year,
                'graded_level' => $request->graded_level,
                'class' => $request->class,
                'payment' => $request->payment,
                'status' => 'active',
            ]);

            return redirect()->route('student.index')->with('update', 'Student created successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($studentPrimaryInfo)
    {
        //
        try {
            $student = StudentPrimaryInfo::findOrFail($studentPrimaryInfo)->first();
            if (file_exists(public_path('uploads/student/' . $student->image)))
                unlink(public_path('uploads/student/' . $student->image));

            $student->delete();

            return redirect()->back()->with('delete', 'Student deleted successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
