<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPrimaryInfo extends Model
{
    //
    use HasFactory;
    protected $table = "student_primary_infos";
    protected $primaryKey = "student_id";

    protected $fillable = [

        'image',
        'kh_fname',
        'kh_lname',
        'en_fname',
        'en_lname',
        'gender',
        'degree_type',
        'dob',
        'phone',
        'email',
        'subject',
        'annual',
        'village',
        'commune',
        'district',
        'province',
        'grade',
        'graded_year',
        'graded_level',
        'class',
        'payment',
        'status',
        'isAcc',
        'isDelete'
    ];

    public function studentSecondaryInfo()
    {
        return $this->hasOne(StudentSecondaryInfo::class, 'student_id', 'student_id');
    }
}
