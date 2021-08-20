<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
class NewController extends Controller
{

    public function index(){
        $categories = Category::all();
        $categories->load('products');
        $listNews = News::all();
        // dd($listNews);
        return view ('client/pages/list_news',[
            'listNews' => $listNews,
            'categories'=>$categories,
        ]);
    }

}
