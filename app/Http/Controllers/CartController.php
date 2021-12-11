<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuOrder;
use App\Models\Order;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CartController extends Controller
{

    public function myCart()
    {

        $orders = Order::with('menu')->where('isServed', 0)->get();

        foreach($orders as $order)
        {
            $order = $order;
        }
        //$price = $order->menu->pluck('price');
         $a = $order;

        $sum = array_reduce($a->menu, function($i, $obj)
        {
            return $i += $obj->price;
        });
        echo $sum;

        //$a = preg_replace('('.'|\*|\"|\]|\[)','',$price);



        //return view('cart')->with('orders', $orders);
    }

}
