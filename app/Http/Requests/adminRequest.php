<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminRequest extends FormRequest
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
            'userName' => 'required',
            'password' => 'required',
        ];
    }
    public function messages(){
        return [
            'userName.required' => 'Thông tin bắt buộc(*)',
            'password.required' => 'Chưa nhập mật khẩu(*)',
        ];
    }
}
