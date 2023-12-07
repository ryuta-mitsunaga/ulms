<?php

namespace App\Http\Controllers;

use App\Http\Login\Requests\ChangePasswordRequest;
use App\Http\Login\Requests\LoginRequest;
use App\UseCase\Login\UseCases\ChangePasswordUseCase;
use App\UseCase\Login\UseCases\LoginUseCase;
use App\UseCase\Login\UseCases\LogoutUseCase;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function login(LoginRequest $request, LoginUseCase $user_case)
    {
        return $user_case($request);

    }

    public function logout(LogoutUseCase $logout_use_case)
    {
        return $logout_use_case();
    }

    public function changePassword(ChangePasswordRequest $request, ChangePasswordUseCase $change_password_use_case)
    {
        return $change_password_use_case($request);
    }
}
