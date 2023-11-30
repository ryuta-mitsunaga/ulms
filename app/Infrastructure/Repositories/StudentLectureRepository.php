<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\LectureEntityList;
use App\Domain\Repositories\LectureRepositoryInterface;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\Models\Lecture;
use App\Models\StudentLecture;
use Carbon\Carbon;

class StudentLectureRepository implements StudentLectureRepositoryInterface
{
    public function add(string $register_date, int $student_id, int $lecture_id, int $period): void
    {
        StudentLecture::query()->create([
            'student_id' => $student_id,
            'lecture_id' => $lecture_id,
            'register_date' => $register_date,
            'period' => $period,
        ]);

    }
}