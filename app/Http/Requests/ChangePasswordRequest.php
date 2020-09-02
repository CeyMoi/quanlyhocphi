<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required|min:6',
            'password_new' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute lớn hơn :min ký tự',
            'confirmed' => ':attribute không khớp'
        ];
    }

    public function attributes()
    {
        return [
            'password' => 'Mật khẩu cũ',
            'password_new' => 'Mật khẩu mới',
        ];
    }
}
