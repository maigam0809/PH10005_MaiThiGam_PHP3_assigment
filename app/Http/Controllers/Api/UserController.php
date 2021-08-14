<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
class UserController extends Controller
{
    public function index() {
        // dd("ok");
        $users = User::simplePaginate(15);
        return \response()->json($users);
        return $this->response([
            'data' => UserResource::collection($users)
        ]);
    }

    public function show(User $user){
        $users = User::simplePaginate(15);
        $users->load('products');
        return \response()->json($users);
        return $this->response([
            'data' => UserResource::collection($users)
        ]);
        
    }

    public function update(Request $request, Category $category) {
        // xu ly validate
        $inputs = $request->only('name');
        $category->fill($inputs);
        $category->save();
        return \response()->json(new UserResource($category));
    }

    public function delete(Category $category){
        $category->delete();
        return  \response()->json(['message' => 'Xoa thanh cong']);
    }
}
