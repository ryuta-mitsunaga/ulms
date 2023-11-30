<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditedLecture extends Model
{
    use SoftDeletes;

    protected $table = 'credited_lecture';

    protected $fillable = [
        'student_id',
        'lecture_id',
    ];
}
