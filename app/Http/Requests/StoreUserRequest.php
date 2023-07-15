<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'lastname' => 'required',
            'firstname' => 'required',
            'password' => 'required',
            'Repeatpassword' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Không được để trống email',
            'email.email' => 'Phải nhập đúng định dạng email',
            'email.unique' => 'Email này đã tồn tại',
            'lastname.required' => 'Không được để trống họ',
            'firstname.required' => 'Không được để trống tên',
            'password.required' => 'Không được để trống mật khẩu',
            'Repeatpassword.required' => 'Không được để trống xác nhận mật khẩu',
            'Repeatpassword.same' => 'Xác nhận mật khẩu phải giống với mật khẩu'
        ];
    }
}
