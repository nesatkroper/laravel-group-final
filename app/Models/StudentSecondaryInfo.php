<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSecondaryInfo extends Model
{
    //
    use HasFactory;
    protected $table = 'student_secondary_infos';
    protected $primaryKey = 'student_id';

    public function studentPrimaryInfo()
    {
        return $this->belongsTo(StudentPrimaryInfo::class, 'student_id', 'student_id');
    }
}
