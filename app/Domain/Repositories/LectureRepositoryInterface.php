<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\LectureEntityList;

interface LectureRepositoryInterface
{
    public function getLectureList(): LectureEntityList;
}
