<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Invoice;
use App\Models\InvoiceDetail;

class CartController extends Controller
{
    public $items;
    public $totalQuantity;
    public $totalPrice;

    public function __construct($prevCart)
    {
        if ($prevCart != null) {
            $this->items = $prevCart->items;
            $this->totalQuantity = $prevCart->totalQuantity;
            $this->totalPrice = $prevCart->totalPrice;

        } else {
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;
        }
    }

    public function addItem(Product $product)
    {
        // dd($product);
        $price = (int)str_replace("$", "", $product->price);
        // dd($price);
        $priceSale = ($product->price - ($product->price*($product->sale/100)));

        // dd($priceSale);
        if (array_key_exists($product->id,$this->items)) {
            $productToAdd = $this->items[$product->id];
            $productToAdd['quantity']++;
            $productToAdd['totalSinglePrice'] = $productToAdd['quantity'] * $priceSale;
        } else {
            $productToAdd = [
                'quantity' => 1,
                'totalSinglePrice' => $priceSale,
                'data' => $product
            ];
        }
        $this->items[$product->id] = $productToAdd;
        $this->totalQuantity++;
        $this->totalPrice = $this->totalPrice + $priceSale;
    }

    public function update()
    {
        $totalPrice = 0;
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity = $totalQuantity + $item['quantity'];
            $totalPrice = $totalPrice + $item['totalSinglePrice'];
        }
        $this->totalQuantity = $totalQuantity;
        $this->totalPrice = $totalPrice;

    }


}
