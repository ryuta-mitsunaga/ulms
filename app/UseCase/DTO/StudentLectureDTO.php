<?php

namespace App\UseCase\DTO;

use App\Domain\Entities\LectureEntity;
use App\Domain\Entities\StudentLectureEntity;

class StudentLectureDTO
{
    public function __construct(
        private LectureEntity $lecture_entity,
        private StudentLectureEntity $student_lecture_entity,
    ) {}

    public function toArray(): array
    {
        return [
            'lecture' => $this->lecture_entity->toArray(),
            'studentLecture' => $this->student_lecture_entity->toArray(),
        ];
    }
}
