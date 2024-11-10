<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SClass extends Model
{
    //
    protected $primaryKey = 'class_id';
    protected $fillable = [
        'name',
        'code',
        'des'
    ];
}
