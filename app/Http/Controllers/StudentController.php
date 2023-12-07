<?php

namespace App\Http\Controllers;

use App\UseCase\Student\UseCases\GetStudentUseCase;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function show(GetStudentUseCase $get_student_use_case)
    {
        return $get_student_use_case();

    }

}
