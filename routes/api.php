<?php

use App\Http\Controllers\LectureController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UlmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/student', [StudentController::class, 'show']);

    Route::get('/lectureList', [LectureController::class, 'getLectureList']);

    // 生徒の履修状況を取得する
    Route::get('/lectureAggregation', [LectureController::class, 'getStudentLectureAggregation']);

    Route::get('/lecture', [LectureController::class, 'getStudentLectureList']);

    Route::post('/lecture/{lecture_id}', [LectureController::class, 'registerStudentLecture']);
    Route::post('/lecture/{lecture_id}/bulk', [LectureController::class, 'registerStudentLectureBulk']);

    Route::delete('/studentLecture/{student_lecture_id}', [LectureController::class, 'removeStudentLecture']);

    Route::post('/changePassword', [LoginController::class, 'changePassword']);
});
