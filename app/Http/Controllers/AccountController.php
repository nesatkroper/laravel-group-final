<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Staff;
use App\Models\StudentPrimaryInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admin = User::where('role', 'admin')->get();
        $staff = User::where('role', 'staff')->get();
        $user = User::where('role', 'user')->get();

        $staffs = Staff::where('isAcc', 'false')
            ->where('isDelete', 'false')
            ->get();
        $student = StudentPrimaryInfo::where('isAcc', 'false')
            ->where('isDelete', 'false')
            ->get();

        // dd($staffs);

        return view('account.index', compact(
            [
                'admin',
                'staff',
                'user',
                'staffs',
                'student'
            ]
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($request->type == "staff") {
            $acc = Staff::find($request->name_id);
            $name = $acc->fname . ' ' . $acc->lname;
            $role = $request->role;
        } else {
            $acc = StudentPrimaryInfo::findOrFail($request->name_id);
            $name = $acc->en_fname . ' ' . $acc->en_lname;
            $role = 'user';
        }

        $acc->update([
            'isAcc' => true
        ]);

        User::create([
            'name' => $name,
            'role' => $role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'info' => $request->name_id
        ]);

        // $acc = 

        // if($new){

        // }

        return redirect()
            ->route('acc.index')
            ->with('create', 'Account create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //

    }
}
