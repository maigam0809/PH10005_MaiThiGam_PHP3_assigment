<?php

namespace App\Http\Requests\Admin\Categories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Rules\RuleNameCateUnique;
class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
          
            'name' =>[
                'required',
                'string',
                'min:3',
                new RuleNameCateUnique(),
            ],
            'image1' => 'image|max:2048',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống.',
            'min:3' => ':attribute tối thiểu 3 ký tự.',
            'max:2048' => ':atribute có size nhỏ hơn 2MB',
            'string' => ':attribute phải là chữ',
            'image'=>':attribute phải là ảnh dạng jpeg,png,jpeg'
        ];
    }

    public function attributes(){
        return [
            'name' => "Tên",
            'image' =>"Ảnh",
        ];
    }
}
