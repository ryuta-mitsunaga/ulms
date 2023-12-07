<?php

namespace App\Http\Login\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'currentPassword' => 'required|min:8',
          'newPassword' => 'required|min:8',
        ];
    }
}
