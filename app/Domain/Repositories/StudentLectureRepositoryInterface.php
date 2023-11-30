<?php

namespace App\Domain\Repositories;

use App\UseCase\DTO\StudentLectureListDTO;

interface StudentLectureRepositoryInterface
{
    public function add(string $register_date, int $student_id, int $lecture_id, int $period): void;

    public function getLectureListByStudentId(int $student_id): StudentLectureListDTO;
}
