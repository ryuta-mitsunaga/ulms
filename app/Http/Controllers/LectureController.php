<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStudentLectureRequest;
use App\UseCase\Lecture\UseCases\GetLectureListUseCase;
use App\UseCase\Lecture\UseCases\GetStudentLectureAggregationUseCase;
use App\UseCase\Lecture\UseCases\GetStudentLectureListUseCase;
use App\UseCase\Lecture\UseCases\RegisterStudentLectureBulkUseCase;
use App\UseCase\Lecture\UseCases\RegisterStudentLectureUseCase;
use App\UseCase\Lecture\UseCases\RemoveStudentLectureUseCase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LectureController extends BaseController
{
    public function getLectureList(GetLectureListUseCase $get_lecture_list_use_case)
    {
        return $get_lecture_list_use_case();
    }

    public function getStudentLectureList(Request $request, GetStudentLectureListUseCase $get_student_lecture_list_use_case)
    {
        // 1: 前期 | 2: 後期 | 3: 全て
        $term_type = $request->term_type;

        return $get_student_lecture_list_use_case($term_type);
    }

    public function registerStudentLecture(RegisterStudentLectureRequest $register_student_lecture_request, RegisterStudentLectureUseCase $register_student_lecture_use_case, $lecture_id)
    {
        return $register_student_lecture_use_case($register_student_lecture_request, (int)$lecture_id);
    }

    public function removeStudentLecture(RemoveStudentLectureUseCase $register_student_lecture_use_case, $student_lecture_id)
    {
        return $register_student_lecture_use_case((int)$student_lecture_id);
    }

    public function getStudentLectureAggregation(GetStudentLectureAggregationUseCase $get_student_lecture_aggregation_use_case)
    {
        return $get_student_lecture_aggregation_use_case();
    }

    public function registerStudentLectureBulk(Request $request, RegisterStudentLectureBulkUseCase $register_student_lecture_bulk_use_case, $lecture_id)
    {
        // 1: 前期 | 2: 後期
        $term_type = $request->term_type;

        return $register_student_lecture_bulk_use_case((int)$lecture_id, $term_type);
    }
}
