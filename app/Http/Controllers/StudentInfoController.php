<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function studentPayment()
    {
        $students = [];
        return view('student-info.payment', compact('students'));
    }
    public function studentScore()
    {
        return view('student-info.score');
    }
    public function studentAttendance()
    {
        return view('student-info.attendance');
    }
}
