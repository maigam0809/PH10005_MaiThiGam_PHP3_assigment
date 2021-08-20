<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\Client\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::all();
        $categories->load('products');

        return view('client/pages/contact',[
            'categories'=>$categories,

        ]);
    }

    public function store(ContactRequest $request){
        $categories = Category::all();
        $categories->load('products');
        $data = $request->except('_token');
        // dd($request);
        $result = Contact::create($data);
        return redirect()->route('contacts.index')->with('message',"Gửi dữ liệu thành công");

    }
}
