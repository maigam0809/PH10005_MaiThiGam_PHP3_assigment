<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product){
        $categories = Category::all();
        $categories->load('products');
        // $products = Product::orderBy('view','DESC')->limit(10)->get();
        // dd($product);
        $proID = Product::with('category')->where('id',$product->id)->first();
        // dd($proID);

        return view('client/pages/productDetail',[
            'categories'=>$categories,
            // 'products'=>$products,
            'proID'=>$proID,
            'product'=>$product

        ]);

    }
}
