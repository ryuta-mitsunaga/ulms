<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStudentLectureRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'registerDate' => 'required|string',
          'period' => 'required|integer',
        ];
    }
}
