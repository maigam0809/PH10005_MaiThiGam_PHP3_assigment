<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Category;
class RuleNameCateUnique implements Rule
{
    public function __construct(){
    }


    public function passes($attribute, $newName)
    {
        $oldName =request()->category->name;

        if($newName === $oldName){
            return true;
        }
        
        $kiemTra = Category::where('name',$newName)->count();

        if($kiemTra > 0){
            return false;
        }
        return true;
    }

    public function message()
    {
        return 'Email này đã tồn tại.';
    }
}
