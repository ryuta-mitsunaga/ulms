<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\LectureEntity;
use App\Domain\Entities\LectureEntityList;
use App\UseCase\DTO\LectureAggregationListDTO;

interface LectureRepositoryInterface
{
    public function getLectureList(): LectureEntityList;

    public function getLectureAggregation(int $student_id): LectureAggregationListDTO;

    public function findById(int $lecture_id): ?LectureEntity;
}
