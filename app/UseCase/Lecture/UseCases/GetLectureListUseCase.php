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
            $response_array[] =   [
                'id' => $lecture_entity->getId(),
                'lectureType' => $lecture_entity->getLectureType(),
                'title' => $lecture_entity->getTitle(),
                'description' => $lecture_entity->getDescription(),
                'monPeriod' => $lecture_entity->getMonPeriod(),
                'tuePeriod' => $lecture_entity->getTuePeriod(),
                'wedPeriod' => $lecture_entity->getWedPeriod(),
                'thuPeriod' => $lecture_entity->getThuPeriod(),
                'friPeriod' => $lecture_entity->getFriPeriod(),
                'satPeriod' => $lecture_entity->getSatPeriod(),
                'sunPeriod' => $lecture_entity->getSunPeriod(),
            ];
        }

        return response()->json($response_array);
    }
}
