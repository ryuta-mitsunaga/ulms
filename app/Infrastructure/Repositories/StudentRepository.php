<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\StudentEntity;
use App\Domain\Repositories\StudentRepositoryInterface;
use App\Models\Student;
use Illuminate\Support\Facades\Log;

class StudentRepository implements StudentRepositoryInterface
{
    public function findById(int $student_id): ?StudentEntity
    {
        $student_model = Student::query()
            ->find($student_id);

        return $student_model?->toEntity();
    }

    public function changePassword(string $password): void
    {
        Student::query()->update(['password' => $password]);
    }
}
