<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
class SearchController extends Controller
{

    public function index(Request $request){
        // dd($request['search_text']);
        $textSearch = $request['search_text'];
        // https://laravel.com/docs/8.x/eloquent-relationships#querying-relationship-existence

        $textPro = Product::whereHas('category', function (Builder $query) use($textSearch) {
            $query->where('name','LIKE','%'.$textSearch.'%');
        })->get();
        // c2
        // https://laravel.com/docs/8.x/eloquent-relationships#querying-relationship-existence

        // tìm các cates
        // $cates = Category::with('products')->where('name','LIKE','%'.$textSearch.'%')->get();
        // lấy tất cả prods ở trong cates
        // có thể dùng for hoặc có thể dùng eloquent collection
        // $products = $cates->flatMap(function ($cate) {
        //     return $cate->products;
        // });

        //c3
        // $cates = Category::with('products')->where('name','LIKE','%'.$textSearch.'%')->get();
        // $products = [];
        // foreach ($cates as $cate) {
        //     array_push($products, $cate->products);
        // }


        // dd($products);


        $categories = Category::all();
        $categories->load('products');
        $products = Product::orderBy('view','DESC')->limit(5)->get();

        // $textPro = Product::where('name','LIKE','%'.$textSearch.'%')->get();
        // $textPro = Category::with('products')->where('name','LIKE','%'.$textSearch.'%')->first();
        // foreach($textPro as $item){
        //    dd( $item->products);
        // }
        return view('client/pages/search',[
            'categories'=>$categories,
            'products'=>$products,
            'textPro'=>$textPro,
            'textSearch' =>$textSearch
        ]);
    }
}
