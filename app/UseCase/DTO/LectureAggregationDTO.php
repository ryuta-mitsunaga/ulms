<?php

namespace App\UseCase\DTO;

use App\Domain\Entities\LectureEntity;

class LectureAggregationDTO
{
    public function __construct(
        private int $student_id,
        private LectureEntity $lecture_entity,
        private int $attendance_count,
    ) {}

    public function toArray(): array
    {
        return [
            'studentId' => $this->student_id,
            'lecture' => $this->lecture_entity->toArray(),
            'attendanceCount' => $this->attendance_count
        ];
    }
}
