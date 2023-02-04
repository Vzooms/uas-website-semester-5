<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function toOrder(){
        $orders = Order::where('account_id', Auth::user()->id)->get();
        $sub_price = 0;

        foreach ($orders as $order => $value) {
            $sub_price += $value->price;
        }

        return view('cart.cart',[
            'orders' => $orders,
            'sub_price' => $sub_price,
            'page' => 'Cart'
        ]);
    }

    public function createOrder(Request $req){
        Order::insert([
            "account_id" => Auth::user()->id,
            "item_id" => $req->item_id,
            "price" => $req->price,
        ]);
        return redirect('/cart');
    }

    public function removeOrder(Request $req){
        Order::where('id',$req->order_id)->delete();
        return redirect('/cart');
    }

    public function checkOut(){
        Order::where('account_id',Auth::user()->id)->delete();

        return view('/success',[
            'header' => 'Success!',
            'body' => "We will contact you 1 x 24 hours",
            "footer" => "Click here to \"Home\"",
            "link" => "/home"
        ]);
    }
}
