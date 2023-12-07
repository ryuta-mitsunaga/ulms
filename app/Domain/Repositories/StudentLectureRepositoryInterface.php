<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\StudentLectureEntity;
use App\Models\StudentLecture;
use App\UseCase\DTO\StudentLectureListDTO;

interface StudentLectureRepositoryInterface
{
    public function add(string $register_date, int $student_id, int $lecture_id, int $period): void;

    public function findByStudentIdAndLectureInfo(int $student_id, string $register_date, int $period): ?StudentLectureEntity;

    public function findByStudentIdAndLectureIdAndTermType(int $student_id, int $lecture_id, int $term_type): ?StudentLectureEntity;

    public function getLectureListByStudentId(int $student_id, int $term_type): StudentLectureListDTO;

    public function remove(int $student_lecture_id): void;

    public function addForTerm(int $student_id, int $lecture_id, int $term_type): void;
}
