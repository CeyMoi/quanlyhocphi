<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'token_hash' => 'required|max:255',
            'password' => 'required|min:6|max:255',
        ];
    }

    public function messages()
    {
        return [
            'token_hash' => 'Mã reset mật khẩu',
            'password' => 'Mật khẩu',
        ];
    }
}
