<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){

        $categories = Category::all();
        $categories->load('products');

        $cateHaiSan = Product::with('category')->where('category_id',2)->limit(5)->get();
        $cateThit = Product::with('category')->where('category_id',5)->limit(5)->get();
        $cateHoaQuaSay = Product::with('category')->where('category_id',4)->limit(5)->get();
        $cateTN = Product::with('category')->where('category_id',3)->limit(5)->get();
        $cateRC = Product::with('category')->where('category_id',1)->limit(10)->get();

        $products = Product::orderBy('view','DESC')->limit(10)->get();

        return view('client/pages/home',[
            'categories'=>$categories,
            'products'=>$products,
            'cateHaiSan'=>$cateHaiSan,
            'cateHoaQuaSay'=>$cateHoaQuaSay,
            'cateTN'=>$cateTN,
            'cateThit'=>$cateThit,
            'cateRC'=>$cateRC,
        ]);
    }

}
