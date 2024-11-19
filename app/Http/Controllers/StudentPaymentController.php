<?php

namespace App\Http\Controllers;

use App\Models\StudentPrimaryInfo;
use Illuminate\Http\Request;

class StudentPaymentController extends Controller
{
    public function search(Request $req)
    {
        $students = StudentPrimaryInfo::where('email', 'like', '%' . $req->search . '%')->orWhere('phone', 'like', '%' . $req->search . '%')->orWhere('kh_fname', 'like', '%' . $req->search . '%')->orWhere('kh_lname', 'like', '%' . $req->search . '%')->orWhere('en_fname', 'like', '%' . $req->search . '%')->orWhere('en_lname', 'like', '%' . $req->search . '%')->get();

        // dd($students);

        return view('student-info.payment', compact('students'));
    }
}
