<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    protected $primaryKey = '';
    protected $fillable = [
        'name',
        'code',
        'des'
    ];
}