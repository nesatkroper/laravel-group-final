<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    protected $fillable = [
        'image',
        'fname',
        'lname',
        'gender',
        'dob',
        'phone',
        'email',
        'department',
        'salary',
        'address',
        'payment',
        'status',
        'isAcc',
        'isDelete'
    ];
}
