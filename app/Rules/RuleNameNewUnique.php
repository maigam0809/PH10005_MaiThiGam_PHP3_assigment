<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Models\News;
class RuleNameNewUnique implements Rule
{
    public function __construct(){
    }


    public function passes($attribute, $newName)
    {
        $oldName =request()->newId->name;
        // dd($oldName);

        if($newName === $oldName){
            return true;
        }
        
        $kiemTra = News::where('name',$newName)->count();

        if($kiemTra > 0){
            return false;
        }
        return true;
    }

    public function message()
    {
        return 'Tên này đã tồn tại.';
    }
}
