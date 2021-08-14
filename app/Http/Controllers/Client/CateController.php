<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class CateController extends Controller
{
    public function show(Category $category){
        $categories = Category::all();
        $categories->load('products');
        $products = Product::orderBy('view','DESC')->limit(10)->get();

        $cateID = Product::with('category')->where('category_id',$category->id)->limit(15)->get();

        return view('client/pages/cateDetail',[
            'categories'=>$categories,
            'products'=>$products,
            'cateID'=>$cateID,
            'category'=>$category

        ]);

    }
}
