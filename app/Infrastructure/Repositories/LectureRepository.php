<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\LectureEntity;
use App\Domain\Entities\LectureEntityList;
use App\Domain\Repositories\LectureRepositoryInterface;
use App\Models\Lecture;
use App\Models\StudentLecture;
use App\UseCase\DTO\LectureAggregationDTO;
use App\UseCase\DTO\LectureAggregationListDTO;
use Illuminate\Support\Facades\Log;

class LectureRepository implements LectureRepositoryInterface
{
    public function getLectureList(): LectureEntityList
    {
        $lecture_entity_list = new LectureEntityList();

        $lectures = Lecture::all();

        $lectures->each(function ($lecture) use ($lecture_entity_list) {
            $lecture_entity_list->append($lecture->toEntity());
        });

        return $lecture_entity_list;
    }

    public function getLectureAggregation(int $student_id): LectureAggregationListDTO
    {
        $lecture_entity_list = new LectureEntityList();

        $lectures = Lecture::query()
            ->with(
                'studentLectures',
                function ($query) use ($student_id) {
                    $query->where('student_id', $student_id);
                }
            )
            ->withCount('studentLectures')
            ->get();

        $lectures_aggregation_list_dto = new LectureAggregationListDTO();

        $lectures->each(function ($lecture) use ($lecture_entity_list, $lectures_aggregation_list_dto, $student_id) {
            /** @var Lecture $lecture */


            $lecture_entity_list->append($lecture->toEntity());
            $lectures_aggregation_list_dto->append(new LectureAggregationDTO(
                $student_id,
                $lecture->toEntity(),
                $lecture->student_lectures_count
            ));
        });

        return $lectures_aggregation_list_dto;
    }

    public function findById(int $lecture_id): ?LectureEntity
    {
        $lecture_model = Lecture::query()
            ->find($lecture_id);

        return $lecture_model?->toEntity();
    }
}
