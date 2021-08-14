<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\News\StoreRequest;
use App\Http\Requests\Admin\News\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\News;

class NewController extends Controller
{
    public function index(){
        $listnews = News::orderBy('id','DESC')->limit(30)->get();
        return view('admin/news/index',[
            'news'=>$listnews,
        ]);
    }

    public function create(){
        return view('admin/news/create');
    }

    public function show(User $user){
        return view('admin/news/show',[
            'user'=>$user,
        ]);
    }

    public function store(StoreRequest $request){
        
        // c1 Lưu vào storage
        $path = $request->file('image')->store('public/news');
        $path = str_replace('public','storage',$path);

        $data = $request->except('_token');
        $data['image'] = $path;
        $result = News::create($data);
        return redirect()->route('admin.news.index')->with('message',"Thêm Thành công");
    }

    public function edit(News $newId){
        return view('admin/news/edit',[
            'newId' =>$newId
        ]);
    }

    public function update(UpdateRequest $request,News $newId){

        $data = request()->except('_token');

        if($request->hasFile('image1')) { 
            $path = $request->file('image1')->store('public/news');
            $path = str_replace('public','storage',$path);
            $data['image'] = $path;
        }

        $newId->update($data);
        return redirect()->route('admin.news.index')->with('message','Sửa thành công');
    }

    public function delete(News $newId){
        $newId->delete();
        return redirect()->route('admin.news.index')->with('message',"Xoá Thành công");
    }

}
