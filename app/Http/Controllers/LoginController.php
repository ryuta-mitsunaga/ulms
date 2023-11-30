<?php

namespace App\Http\Controllers;

use App\Http\Login\Requests\LoginRequest;
use App\UseCase\Login\UseCases\LoginUseCase;
use App\UseCase\Login\UseCases\LogoutUseCase;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class LoginController extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function index()
    {
        return Log::info('Hello World');
    }

    public function login(LoginRequest $request, LoginUseCase $user_case)
    {
        return $user_case($request);

    }

    public function logout(LogoutUseCase $logout_use_case)
    {
        return $logout_use_case();
    }
}
