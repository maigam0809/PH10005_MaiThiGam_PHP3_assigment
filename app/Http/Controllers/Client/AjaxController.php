<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Comment;
use App\Models\User;
class AjaxController extends Controller
{
    public function index(Request $request){
        // $data = $request;

        $commentajax = '';

        $data = $request->except('_token');
        // dd($data);
        $result = Comment::create($data);
        // dd($result);

        $commentajax = Comment::with('users','products')->where('id',$result->id)->first();


        echo "
            <div class='media mb-4 pl-1 col-10' style='border-bottom: 0.2px solid #DDDDDD;'>

            <a class='media-left mr-3 ' href='#'>
                <img src='https://ui-avatars.com/api/?name=". $commentajax->first_name."'>
            </a>
            <div class='media-body'>

                <h6 class='media-heading user_name font-weight-bold'>".$commentajax->first_name."</h6>
                <p class='font-size-2' style='font-size: 14px;'>".$commentajax->content."</p>
            </div>

            <p class='pull-right'>
                <small>".$commentajax->created_at."</small>
            </p>
        </div>";
        return redirect()->route('products.show',['product'=>$commentajax->product_id]);


    }
}
