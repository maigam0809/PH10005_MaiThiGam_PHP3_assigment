<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Products\StoreRequest;
use App\Http\Requests\Admin\Products\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ProductController extends Controller
{
    public function index(){

        $listPro = Product::with('category')->orderBy('id','ASC')->limit(30)->get();
        return view('admin/products/index',[
            'products'=>$listPro,
        ]);
    }

    public function show(Product $product){
        $users = User::all();
         return view('admin/products/show',[
            'product'=>$product,
            'users'=>$users,
        ]);
    }

    public function create(){
        $listCate = Category::all();
        return view('admin/products/create',[
            'categories' => $listCate
        ]);
    }

    public function store(StoreRequest $request){
        
        // c1 Lưu vào storage
        $path = $request->file('image')->store('public/products');
        $path = str_replace('public','storage',$path);

        $data = $request->except('_token');
        $data['image'] = $path;
        $result = Product::create($data);
        return redirect()->route('admin.products.index')->with('message',"Thêm Thành công");
    }

    public function edit(Product $product){
        $listCate = Category::all();
        return view('admin/products/edit',[
            'product' =>$product,
            'categories' => $listCate
        ]);
    }

    public function update(UpdateRequest $request,Product $product){

        $data = request()->except('_token');

        if($request->hasFile('image1')) { 
            $path = $request->file('image1')->store('public/products');
            $path = str_replace('public','storage',$path);
            $data['image'] = $path;
        }

        $product->update($data);
        return redirect()->route('admin.products.index')->with('message','Sửa thành công');
    }

    public function delete(Product $product){
        $product->delete();
        return redirect()->route('admin.products.index')->with('message',"Xoá Thành công");
    }
}
