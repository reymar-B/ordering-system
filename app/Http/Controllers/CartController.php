<?php

namespace App\Http\Controllers;

use App\Models\MenuOrder;
use App\Models\Order;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function myCart()
    {
        $orders = Order::with('menu')->where('isServed', 0)->get();


        foreach($orders as $order)
        {
            foreach($order as $menus)
            {
                $a = $menus;
            }
        }

        dd($a);
        return view('cart')->with('orders', $orders);
    }

}
