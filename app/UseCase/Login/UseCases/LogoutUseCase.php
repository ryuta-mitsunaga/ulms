<?php

namespace App\UseCase\Login\UseCases;

use App\Http\Login\Requests\LoginRequest;
use GuzzleHttp\Psr7\Response;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LogoutUseCase extends BaseController
{
    public function __invoke()
    {
        Log::info(Auth::id());
        Auth::logout();

        return response()->json(['message' => 'Logout Success']);

    }
}
