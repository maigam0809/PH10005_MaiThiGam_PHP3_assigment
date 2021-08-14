<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\InvoiceDetail;

class InvoiceController extends Controller
{
    public function index(){
        $listInvoice = Invoice::with('user')->orderBy('id','DESC')->limit(30)->get();
        return view('admin/invoices/index',[
            'invoices'=>$listInvoice,
        ]);
    }

    public function show(Invoice $invoice){
        return view('admin/invoices/show',[
            'invoice'=>$invoice,
        ]);
    }

}
