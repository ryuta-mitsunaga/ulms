<?php

namespace App\UseCase\Login\UseCases;

use Illuminate\Routing\Controller as BaseController;

class LogoutUseCase extends BaseController
{
    public function __invoke()
    {
        auth()->logout();

        return response()->json(['message' => 'Logout Success']);

    }
}
