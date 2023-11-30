<?php

namespace App\UseCase\Lecture\UseCases;

use App\Domain\Entities\LectureEntity;
use App\Domain\Repositories\LectureRepositoryInterface;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class GetLectureListUseCase extends BaseController
{
    /**
     * @param AuthManager $auth
     */
    public function __construct(
        private readonly AuthManager $auth,
        private LectureRepositoryInterface $lecture_repository,
    ) {}

    public function __invoke(

    ): JsonResponse {
        $lecture_entity_list = $this->lecture_repository->getLectureList();

        $response_array = [];

        /** @var LectureEntity $lecture_entity */
        foreach ($lecture_entity_list as $lecture_entity) {
            $response_array[] = $lecture_entity->toArray();
        }

        return response()->json($response_array);
    }
}
