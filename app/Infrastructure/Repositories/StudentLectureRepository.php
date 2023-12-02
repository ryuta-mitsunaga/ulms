<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\StudentLectureEntity;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\Models\StudentLecture;
use App\UseCase\DTO\StudentLectureListDTO;

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

    public function getLectureListByStudentId(int $student_id): StudentLectureListDTO
    {
        $student_lecture_model_list = StudentLecture::query()
            ->where('student_id', $student_id)
            ->get();

        $student_lecture_list_dto = new StudentLectureListDTO();

        $student_lecture_model_list->each(function ($student_lecture_model) use ($student_lecture_list_dto) {
            /** @var StudentLecture $student_lecture_model */
            $student_lecture_list_dto->append($student_lecture_model->toDTO());
        });

        return $student_lecture_list_dto;
    }

    public function findByStudentIdAndLectureInfo(int $student_id, string $register_date, $period): ?StudentLectureEntity
    {
        $student_lecture_model = StudentLecture::query()
            ->where([
                ['student_id', $student_id],
                ['register_date', $register_date],
                ['period', $period],
            ])
            ->first();

        return $student_lecture_model?->toEntity();
    }

    public function remove(int $student_lecture_id): void
    {
        StudentLecture::query()
            ->where('id', $student_lecture_id)
            ->delete();
    }
}
