<?php

namespace App\UseCase\Lecture\UseCases;

use App\Domain\Repositories\StudentLectureRepositoryInterface;
use App\UseCase\DTO\StudentLectureDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class GetStudentLectureListUseCase extends BaseController
{
    public function __construct(
        private StudentLectureRepositoryInterface $student_lecture_repository,
    ) {}

    public function __invoke(
        int $term_type
    ): JsonResponse {
        $student_id = auth()->id();
        $student_lecture_list_dto = $this->student_lecture_repository->getLectureListByStudentId($student_id, $term_type);

        $response_array = [];

        /** @var StudentLectureDTO $student_lecture_dto */
        foreach ($student_lecture_list_dto as $student_lecture_dto) {
            $response_array[] = $student_lecture_dto->toArray();
        }

        return response()->json($response_array);
    }
}
