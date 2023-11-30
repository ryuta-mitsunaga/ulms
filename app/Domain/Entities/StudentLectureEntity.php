<?php

namespace App\Domain\Entities;

class StudentLectureEntity
{
    public function __construct(
        private int $id,
        private int $student_id,
        private int $lecture_id,
        private string $register_date,
        private int $period,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getStudentId(): int
    {
        return $this->student_id;
    }

    public function getLectureId(): int
    {
        return $this->lecture_id;
    }

    public function getRegisterDate(): string
    {
        return $this->register_date;
    }

    public function getPeriod(): int
    {
        return $this->period;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'studentId' => $this->student_id,
            'lectureId' => $this->lecture_id,
            'registerDate' => $this->register_date,
            'period' => $this->period,
        ];
    }
}
