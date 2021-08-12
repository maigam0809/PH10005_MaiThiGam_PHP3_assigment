<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Product;
class CategoryController extends Controller
{
    public function index() {
        // dd("ok");
        $categories = Category::simplePaginate(15);
        return \response()->json($categories);
        return $this->response([
            'data' => CategoryResource::collection($categories)
        ]);
    }

    public function show(Category $category){
        $categories = Category::simplePaginate(15);
        $categories->load('products');
        // $category = $categories->first();
        // dd($categories);
        return \response()->json($categories);
        return $this->response([
            'data' => CategoryResource::collection($categories)
        ]);
    }

    public function update(Request $request, Category $category) {
        // xu ly validate
        $inputs = $request->only('name');
        $category->fill($inputs);
        $category->save();
        return \response()->json(new CategoryResource($category));
    }

    public function delete(Category $category){
        $category->delete();
        return  \response()->json(['message' => 'Xoa thanh cong']);
    }
}
