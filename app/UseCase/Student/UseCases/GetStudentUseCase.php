<?php

namespace App\UseCase\Student\UseCases;

use App\Domain\Repositories\StudentRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class GetStudentUseCase extends BaseController
{
    public function __construct(
        private StudentRepositoryInterface $student_repository
    ) {}

    public function __invoke()
    {
        $user_id = Auth::id();
        $student_entity = $this->student_repository->findById($user_id);

        return response()->json($student_entity?->toArray());
    }
}
