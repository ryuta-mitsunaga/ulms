<?php

namespace App\Models;

use App\Domain\Entities\StudentLectureEntity;
use App\Models\Lecture;
use App\Models\Student;
use App\UseCase\DTO\StudentLectureDTO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentLecture extends Model
{
    use SoftDeletes;

    protected $table = 'student_lecture';

    protected $fillable = [
        'student_id',
        'lecture_id',
        'register_date',
        'period',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function lecture(): BelongsTo
    {
        return $this->belongsTo(Lecture::class);
    }

    public function toEntity(): StudentLectureEntity
    {
        return new StudentLectureEntity(
            $this->id,
            $this->student_id,
            $this->lecture_id,
            $this->register_date,
            $this->period,
        );
    }

    public function toDTO(): StudentLectureDTO
    {
        return new StudentLectureDTO(
            $this->lecture->toEntity(),
            $this->toEntity(),
        );
    }
}
