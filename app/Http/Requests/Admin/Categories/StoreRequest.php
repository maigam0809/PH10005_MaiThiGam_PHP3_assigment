<?php

namespace App\Http\Requests\Admin\Categories;

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
            'name' =>'required|string|unique:categories,name|min:3',
            'image' => 'required|image|max:2048',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống.',
            'min:3' => ':attribute tối thiểu 3 ký tự.',
            'unique' => ':attribute đã tồn tại.',
            'string' => ':attribute phải là chữ',
            'max:2048' => ':atribute có size nhỏ hơn 2MB',
            'image'=>':attribute phải là ảnh dạng jpeg,png,jpeg'

        ];
    }

    public function attributes(){
        return [
            'name' => "Tên danh mục",
            'image' =>"Ảnh",

        ];
    }
}
