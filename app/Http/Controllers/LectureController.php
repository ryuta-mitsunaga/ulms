<?php

namespace App\Http\Controllers;

use App\Http\Login\Requests\LoginRequest;
use App\UseCase\Lecture\UseCases\GetLectureListUseCase;
use App\UseCase\Login\UseCases\LoginUseCase;
use App\UseCase\Login\UseCases\LogoutUseCase;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class LectureController extends BaseController
{
    public function getLectureList(GetLectureListUseCase $get_lecture_list_use_case)
    {
        return $get_lecture_list_use_case();
    }
}
