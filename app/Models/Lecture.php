<?php

namespace App\Models;

use App\Domain\Entities\LectureEntity;
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
        'sat_period' => 'array',
        'sun_period' => 'array',
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
        'sat_period',
        'sun_period',
    ];

    public function toEntity(): LectureEntity
    {
        return new LectureEntity(
            $this->id,
            $this->lecture_type,
            $this->title,
            $this->description,
            $this->mon_period ?? [],
            $this->tue_period ?? [],
            $this->wed_period ?? [],
            $this->thu_period ?? [],
            $this->fri_period ?? [],
            $this->sat_period ?? [],
            $this->sun_period ?? [],
        );
    }
}
