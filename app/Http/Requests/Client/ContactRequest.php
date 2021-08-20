<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' =>'required|string|min:3',
            'email' =>'required|email',
            'phone' => 'required|numeric',
            'content' => 'required|string|min:3',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống.',
            'min:3' => ':attribute tối thiểu là 3 ký tự.',
            'email' => ':attribute không đúng dạng email.',
            'same' =>  ':attribute không khớp',
            'string' =>  ':attribute phải là chữ.',
            'numeric' =>  ':attribute phải là số.',

        ];
    }

    public function attributes(){
        return [
            'name' =>"Họ và tên ",
            'email' =>"Email",
            'phone' =>"Số điện thoại",
            'content' =>"Nội dung",

        ];
    }
}
