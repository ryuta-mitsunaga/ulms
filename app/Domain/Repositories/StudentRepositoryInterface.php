<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\StudentEntity;

interface StudentRepositoryInterface
{
    public function findById(int $user_id): ?StudentEntity;

    public function changePassword(string $password): void;
}
