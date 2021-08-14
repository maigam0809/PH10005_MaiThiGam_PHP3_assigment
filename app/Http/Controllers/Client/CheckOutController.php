<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\User;
use App\Models\InvoiceDetail;

class CheckOutController extends Controller
{
    public function index()
    {
        $users_login = Auth::user();

        $shipmentDetails= User::firstWhere("id",$users_login->id);
        $users = User::firstWhere("id", $users_login->id);
        $users->load('product');
        $users->load('invoices');
        dd($users);

        return view('client.pages.checkout',[
            'users' =>$users
        ]);

    }

}
