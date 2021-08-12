<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $listCate = Category::orderBy('id','DESC')->limit(30)->get();
        $listCate->load('products');
        $categories = $listCate->first();
        return view('admin/categories/index',[
            'categories'=>$listCate,
        ]);
    }

    public function show(Category $category){
        return view('admin/categories/show',[
            'category'=>$category,
        ]);
    }

    public function create(){
        return view('admin/categories/create');
    }

    public function store(StoreRequest $request){
        
        // c1 Lưu vào storage
        $path = $request->file('image')->store('public/categories');
        $path = str_replace('public','storage',$path);

        $data = $request->except('_token');
        $data['image'] = $path;
        $result = Category::create($data);
        return redirect()->route('admin.categories.index')->with('message',"Thêm Thành công");
    }

    public function edit(Category $category){
        return view('admin/categories/edit',[
            'category' =>$category
        ]);
    }

    public function update(UpdateRequest $request,Category $category){

        $data = request()->except('_token');

        if($request->hasFile('image1')) { 
            $path = $request->file('image1')->store('public/categories');
            $path = str_replace('public','storage',$path);
            $data['image'] = $path;
        }

        $category->update($data);
        return redirect()->route('admin.categories.index')->with('message','Sửa thành công');
    }

    public function delete(Category $category){
        $category->delete();
        // em phai delete cac san pham thuoc category o day
        // $category->products()->delete();
        return redirect()->route('admin.categories.index')->with('message',"Xoá Thành công");
    }
}
