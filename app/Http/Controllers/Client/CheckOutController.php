<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\User;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{

    public function index()
    {
        $users_login = Auth::user();

        $shipmentDetails= User::firstWhere("id",$users_login->id);
        $users = User::firstWhere("id", $users_login->id);
        $users->load('product');
        $users->load('invoices');
        // dd($users);

        return view('client.pages.checkout',[
            'users' =>$users
        ]);

    }

    public function addProductToCart(Request $request,Product $product){
        // dd($product);
        $prevCart = $request->session()->get('cart');
        // dd($prevCart);
        $cart = new CartController($prevCart);
        // $productID = Product::find($product);
        $cart->addItem($product);
        // dd($productID);
        $request->session()->put('cart', $cart);

        return redirect()->route('cart')->with('message','Thêm giỏ hàng thành công');
    }

    public function showCart()
    {
        $categories = Category::all();
        $categories->load('products');

        $cart = Session::get('cart');
        // dd($cart);
        if ($cart) {
            return view('client/pages/cart', [
                'data' => $cart,
                'categories'=>$categories,
                ]);
        } else {
            echo "cart empty";
            return redirect()->route('/');
        }
    }

    public function deleteCart(Request $request,Product $product)
    {
        $cart = $request->session()->get('cart');
        if (array_key_exists($product->id, $cart->items)) {
            unset($cart->items[$product->id]);
        }
        $cart->update();
        $request->session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function createQuantityPro(Request $request, Product $product)
    {
        $prevCart = $request->session()->get('cart');
        $prevCart->addItem($product);
        $request->session()->put('cart', $prevCart);
        return redirect()->route('cart');
    }

    public function updateQuantityPro(Request $request,Product $product)
    {
        $prevCart = $request->session()->get('cart');
        if ($prevCart->items[$product->id]['quantity'] > 1) {
            $cleanPrice = (float)str_replace($product->price);
            $prevCart->items[$product->id]['quantity'] = (float)($prevCart->items[$product->id]['quantity']) - 1;
            $prevCart->items[$product->id]['totalSinglePrice'] = (float)($prevCart->items[$product->id]['quantity']) * (float)$cleanPrice;
            $prevCart->update();
            $request->session()->put('cart', $prevCart);
        }
        return redirect()->route('cart');
    }

    public function contactBill(Request $request){
        // view('client/pages/custom_info');
        // xử lí code ở đây
    }

    public function createOrder()
    {
        $cart = Session::get('cart');
        // dd($request);
        if (Auth::check()) {
            $user = Auth::user();
            // echo($user->id);
            $newOrderArray = array(
                "status"=>'1',
                "user_id"=> $user->id,
                "address"=> $user->address,
                "phone_number"=> '0973219120',
                "total_price"=> $cart->totalPrice,
            );
            $createdOrder = Invoice::create($newOrderArray);
            // $orders_id = Invoice::find($createdOrder->id);
            // dd($createdOrder->id);
            foreach ($cart->items as $item) {
                $item_id = $item['data']['id'];
                $item_name = $item['data']['name'];
                $item_price = $item['data']['price'];
                $item_quantity = $item['quantity'];
                $newItemInCurrentOrder = array(
                    "product_id" => $item_id,
                    "invoice_id" => $createdOrder->id,
                    "quantity" => $item_quantity,
                    "unit_price" =>$item_price
                );
                $created_order_details = InvoiceDetail::insert($newItemInCurrentOrder);
            }

            return redirect()->route('cart')->with('message',"Đặt hàng thành công");
            Session::forget("cart");
        } else {
            view('client/pages/custom_info');
        }
    }

}
