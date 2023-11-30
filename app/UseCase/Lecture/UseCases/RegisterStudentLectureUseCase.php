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

class RegisterStudentLectureUseCase extends BaseController
{
    public function __construct(
        private StudentLectureRepositoryInterface $student_lecture_repository,
    ) {}

    public function __invoke(
        RegisterStudentLectureRequest $register_student_lecture_request,
        int $student_id,
        int $lecture_id
    ): JsonResponse {
        DB::beginTransaction();

        $register_date = $register_student_lecture_request->registerDate;
        $period = $register_student_lecture_request->period;

        try {
            $this->student_lecture_repository->add($register_date, $student_id, $lecture_id, $period);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['statusCode' => 500,'message' => 'Register Failed'], 200);
        }


        return response()->json(['statusCode' => 200,'message' => 'Register Success'], 200);
    }
}