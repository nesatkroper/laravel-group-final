<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function studentPayment()
    {
        return view('student-info.index-payment');
    }
    public function studentScore()
    {
        return view('student-info.index-score');
    }
    public function studentAttendance()
    {
        return view('student-info.index-attendance');
    }
}
