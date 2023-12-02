<?php

namespace App\UseCase\Lecture\UseCases;

use App\Domain\Entities\LectureEntity;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\Http\Requests\RegisterStudentLectureRequest;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RemoveStudentLectureUseCase extends BaseController
{
    public function __construct(
        private StudentLectureRepositoryInterface $student_lecture_repository,
    ) {}

    public function __invoke(
        int $student_lecture_id,
    ): JsonResponse {
        DB::beginTransaction();

        try {
            $this->student_lecture_repository->remove($student_lecture_id);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['statusCode' => 500,'message' => 'Remove Failed'], 200);
        }


        return response()->json(['statusCode' => 200,'message' => 'Remove Success'], 200);
    }
}
