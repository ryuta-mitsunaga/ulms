<?php

namespace App\UseCase\Login\UseCases;

use App\Http\Login\Requests\LoginRequest;
use GuzzleHttp\Psr7\Response;
use Illuminate\Auth\AuthManager;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginUseCase extends BaseController
{
    /**
     * @param AuthManager $auth
     */
    public function __construct(
        private readonly AuthManager $auth,
    ) {}

    public function __invoke(
        LoginRequest $request
    ): JsonResponse {

        $credentials = $request->only('email', 'password');
        if ($this->auth->guard('student')->attempt($credentials)) {
            Log::info(Auth::user());
            $request->session()->regenerate();


            return response()->json(['statusCode' => 200,'message' => 'Login Success'], 200);
        } else {
            return response()->json(['statusCode' => 500,'message' => 'Unauthorized'], 200);
        }
    }
}
