<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogAttendLecture extends Model
{
    use SoftDeletes;

    protected $table = 'log_attend_lecture';

    protected $fillable = [
        'attend_time',
        'student_id',
        'lecture_id',
    ];
}
