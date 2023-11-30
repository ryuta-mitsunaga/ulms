<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\LectureEntityList;
use App\Domain\Repositories\LectureRepositoryInterface;
use App\Models\Lecture;

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
}
