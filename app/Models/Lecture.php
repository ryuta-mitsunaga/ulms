<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecture extends Model
{
    use SoftDeletes;

    protected $table = 'lecture';

    protected $casts = [
        'mon_period' => 'array',
        'tue_period' => 'array',
        'wed_period' => 'array',
        'thu_period' => 'array',
        'fri_period' => 'array',
    ];

    protected $fillable = [
        'lecture_type',
        'title',
        'description',
        'mon_period',
        'tue_period',
        'wed_period',
        'thu_period',
        'fri_period',
    ];
}
