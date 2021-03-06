<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Http\Requests\Admin\Users\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $listUsers = User::orderBy('id','DESC')->limit(30)->get();
        $listUsers->load('invoices');
        $users = $listUsers->first();
        return view('admin/users/index',[
            'users'=>$listUsers,
        ]);
    }

    public function create(){
        return view('admin/users/create');
    }

    public function show(User $user){
        return view('admin/users/show',[
            'user'=>$user,
        ]);
    }

    public function store(StoreRequest $request){
        
        // c1 Lưu vào storage
        $path = $request->file('image')->store('public/users');
        $path = str_replace('public','storage',$path);

        $data = $request->except('_token');
        $data['image'] = $path;
        $result = User::create($data);
        return redirect()->route('admin.users.index')->with('message',"Thêm Thành công");
    }

    public function edit(User $user){
        return view('admin/users/edit',[
            'user' =>$user
        ]);
    }

    public function update(UpdateRequest $request,User $user){

        $data = request()->except('_token');

        if($request->hasFile('image1')) { 
            $path = $request->file('image1')->store('public/users');
            $path = str_replace('public','storage',$path);
            $data['image'] = $path;
        }

        $user->update($data);
        return redirect()->route('admin.users.index')->with('message','Sửa thành công');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('admin.users.index')->with('message',"Xoá Thành công");
    }
}
