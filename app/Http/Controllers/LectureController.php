<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStudentLectureRequest;
use App\UseCase\Lecture\UseCases\GetLectureListUseCase;
use App\UseCase\Lecture\UseCases\GetStudentLectureListUseCase;
use App\UseCase\Lecture\UseCases\RegisterStudentLectureUseCase;
use App\UseCase\Lecture\UseCases\RemoveStudentLectureUseCase;
use Illuminate\Routing\Controller as BaseController;

class LectureController extends BaseController
{
    public function getLectureList(GetLectureListUseCase $get_lecture_list_use_case)
    {
        return $get_lecture_list_use_case();
    }

    public function getStudentLectureList(GetStudentLectureListUseCase $get_student_lecture_list_use_case, $student_id)
    {
        return $get_student_lecture_list_use_case((int)$student_id);
    }

    public function registerStudentLecture(RegisterStudentLectureRequest $register_student_lecture_request, RegisterStudentLectureUseCase $register_student_lecture_use_case, $student_id, $lecture_id)
    {
        return $register_student_lecture_use_case($register_student_lecture_request, (int)$student_id, (int)$lecture_id);
    }

    public function removeStudentLecture(RemoveStudentLectureUseCase $register_student_lecture_use_case, $student_lecture_id)
    {
        return $register_student_lecture_use_case((int)$student_lecture_id);
    }
}
