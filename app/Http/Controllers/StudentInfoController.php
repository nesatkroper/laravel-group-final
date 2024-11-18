<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function studentPayment()
    {
        return view('student-info.payment');
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
