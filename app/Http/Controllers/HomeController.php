<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\StudentPrimaryInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = StudentPrimaryInfo::count();
        $staffs = Staff::count();
        $actives = StudentPrimaryInfo::where('status', 'active')->count();
        $inactives = StudentPrimaryInfo::where('status', 'inactive')->count();

        return view('home', compact(['students', 'staffs', 'actives', 'inactives']));
    }
}
