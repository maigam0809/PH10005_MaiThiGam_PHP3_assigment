<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\Category;

class StoreRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {   
        
        return [
            'name' =>'required|string|unique:products,name|min:3',
            'price'=>'required|alpha_num|numeric|min:1',
            'quantity'=>'required|alpha_num|numeric|min:1',
            'sale'=>'required|alpha_num|numeric',
            'description'=>'required|min:3',
            'detail'=>'required|min:3',
            'intro'=>'required|string|min:3',
            'image' => 'required|image|max:2048',
        ];
    }

    public function messages(){
        return [
            'required' => ':attribute không được để trống',
            'min:3' => ':atribute tối thiểu gồm 3 ký tự',
            'max' => ':atribute tối đa gồm 100 ký tự',
            'numeric' => ':atribute phải là số',
            'min:1' => ':atribute phải lớn hơn 1',
            'alpha_num' => ':atribute phải là số',
            'string' => ':attribute phải là chữ',

        ];
    }

    public function attributes(){
        return [
            'name' =>"Tên sản phẩm ",
            'price' =>"Giá ",
            'quantity' =>"Số lượng",
            'sale' =>"Giảm giá ",
            'image' =>"Ảnh",
            'description' =>"Mô tả",
            'detail' =>"Nội dung",
            'intro' =>"Sản xuất ",

        ];
    }
}
