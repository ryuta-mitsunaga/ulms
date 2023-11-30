<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentLecture extends Model
{
    use SoftDeletes;

    protected $table = 'student_lecture';

    protected $fillable = [
        'student_id',
        'lecture_id',
    ];
}
