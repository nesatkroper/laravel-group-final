<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';
    protected $primaryKey = 'staff_id';
    protected $fillable = ['name', 'photo'];
}