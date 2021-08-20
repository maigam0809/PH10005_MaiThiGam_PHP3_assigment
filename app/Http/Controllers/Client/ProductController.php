<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index(Product $product){
        $categories = Category::all();
        $categories->load('products');

        $proID = Product::with('category','comments')->where('id',$product->id)->first();
        $users = User::all();
        // dd($proID->comments);
        return view('client/pages/product_detail',[
            'categories'=>$categories,
            'proID'=>$proID,
            'product'=>$product,
            'users'=>$users,

        ]);

    }

    public function selling(){
        $categories = Category::all();
        $categories->load('products');
        // lấy dữ liệu của product sale

        $products = Product::orderBy('view','DESC')->limit(7)->get();
        $proSelling = Product::orderBy('quantity_sold', 'DESC')->limit(20)->get();
        // dd($proID);

        return view('client/pages/product_selling',[
            'categories'=>$categories,
            'proSelling'=>$proSelling,
            'products'=>$products,

        ]);

    }

    public function discount(){
        $categories = Category::all();
        $categories->load('products');
        // lấy dữ liệu của product sale

        $products = Product::orderBy('view','DESC')->limit(7)->get();
        $proDiscount = Product::orderBy('sale', 'DESC')->limit(20)->get();
        // dd($proID);

        return view('client/pages/product_discount',[
            'categories'=>$categories,
            'proDiscount'=>$proDiscount,
            'products'=>$products,

        ]);
    }

}
