<?php

namespace App\Http\Requests\Admin\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' =>'required|string|min:3',
            'image' => 'required|image|max:2048',
            'description'=>'required|min:3',
            'detail'=>'required|min:3',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống.',
            'string' => ':attribute phải là số or ký tự',
            'min:3' => ':attribute tối thiểu là 3 ký tự.',
            'unique' => ':attribute đã tồn tại.',
            'max:2048' => ':atribute có size nhỏ hơn 2MB',
            'image'=>':attribute phải là ảnh dạng ảnh.'

        ];
    }

    public function attributes(){
        return [
            'name' =>"Tiêu đề ",
            'email' =>"Email",
            'image' =>"Ảnh",
            'description' =>"Mô tả",
            'detail' =>"Chi tiết",
        ];
    }
}
