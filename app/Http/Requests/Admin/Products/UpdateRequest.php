<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
// use App\Rules\RuleNameCateUnique;
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
                'min:3',
                'string',
                // new RuleNameCateUnique(),
            ],
            'image1' => 'image|max:2048',
            'description'=>'required|min:3',
            'detail'=>'required|min:3',
            'intro'=>'required|min:3',
        ];
    }

    public function messages(){
        return [
            'required' =>':attribute không được để trống.',
            'min:3' => ':attribute tối thiểu 3 ký tự.',
            'max:2048' => ':atribute có size nhỏ hơn 2MB',
            'image'=>':attribute phải là ảnh dạng jpeg,png,jpeg',
            'string' => ':attribute phải là chữ',
        ];
    }

    public function attributes(){
        return [
            'name' => "Tên",
            'image' =>"Ảnh",
            'detail' =>'Mô tả',
            'description' =>'Chi tiết',
            'intro' =>'Sản xuất',
        ];
    }
}
