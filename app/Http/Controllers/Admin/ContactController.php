<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $listContact = Contact::orderBy('id','DESC')->limit(30)->get();
        return view('admin/contacts/index',[
            'contacts'=>$listContact,
        ]);
    }

    public function show(Contact $contact){
        return view('admin/contacts/show',[
            'contact'=>$contact,
        ]);
    }

    public function delete(Category $category){
        $category->delete();
        // em phai delete cac san pham thuoc category o day
        // $category->products()->delete();
        return redirect()->route('admin.contacts.index')->with('message',"Xoá Thành công");
    }
}
