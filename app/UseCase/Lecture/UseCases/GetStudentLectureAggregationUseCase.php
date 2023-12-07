<?php

namespace App\UseCase\Lecture\UseCases;

use App\Domain\Entities\LectureEntity;
use App\Domain\Repositories\LectureRepositoryInterface;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\Http\Requests\RegisterStudentLectureRequest;
use App\Infrastructure\Repositories\LectureRepository;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GetStudentLectureAggregationUseCase extends BaseController
{
    public function __construct(
        private LectureRepositoryInterface $lecture_repository,
    ) {}

    public function __invoke(): JsonResponse
    {
        $student_id = auth()->id();
        $lecture_aggregation_list_dto = $this->lecture_repository->getLectureAggregation($student_id);

        return response()->json($lecture_aggregation_list_dto->toArray());
    }
}
