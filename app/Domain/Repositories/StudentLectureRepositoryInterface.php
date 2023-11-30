<?php

namespace App\Domain\Repositories;

use Carbon\Carbon;

interface StudentLectureRepositoryInterface
{
    public function add(string $register_date, int $student_id, int $lecture_id, int $period): void;
}
