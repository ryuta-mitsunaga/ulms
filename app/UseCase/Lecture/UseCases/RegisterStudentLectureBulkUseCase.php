<?php

namespace App\UseCase\Lecture\UseCases;

use App\Domain\Repositories\LectureRepositoryInterface;
use App\Domain\Repositories\StudentLectureRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class RegisterStudentLectureBulkUseCase extends BaseController
{
    public function __construct(
        private StudentLectureRepositoryInterface $student_lecture_repository,
        private LectureRepositoryInterface $lecture_repository
    ) {}

    public function __invoke(
        int $lecture_id,
        int $term_type
    ): JsonResponse {
        DB::beginTransaction();

        $student_id = auth()->id();

        $term_type = $term_type;

        $student_lecture_entity = $this->student_lecture_repository->findByStudentIdAndLectureIdAndTermType($student_id, $lecture_id, $term_type);

        try {
            // 登録対象の時間に講義登録されている場合は登録済みの講義を削除する
            if ($student_lecture_entity) {
                $this->student_lecture_repository->remove($student_lecture_entity->getId());
            }

            $this->student_lecture_repository->addForTerm($student_id, $lecture_id, $term_type);


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['statusCode' => 500,'message' => 'Register Failed'], 200);
        }


        return response()->json(['statusCode' => 200,'message' => 'Register Success'], 200);
    }
}
