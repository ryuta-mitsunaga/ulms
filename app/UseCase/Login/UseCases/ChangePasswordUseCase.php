<?php

namespace App\UseCase\Login\UseCases;

use App\Domain\Repositories\StudentRepositoryInterface;
use App\Http\Login\Requests\ChangePasswordRequest;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class ChangePasswordUseCase extends BaseController
{
    /**
     * @param AuthManager $auth
     */
    public function __construct(
        private StudentRepositoryInterface $student_repository
    ) {}

    public function __invoke(
        ChangePasswordRequest $request
    ): JsonResponse {
        Auth::user()->password = $request->currentPassword;


        $token = auth()->attempt([
            'email' => Auth::user()->email,
            'password' => $request->currentPassword
        ]);

        if (!$token) {
            return response()->json(['statusCode' => 401,'message' => '現在のパスワードが一致しませんでした'], 200);
        }

        $this->student_repository->changePassword(bcrypt($request->newPassword));

        return response()->json(['statusCode' => 200,'message' => 'パスワードを変更しました'], 200);
    }
}
