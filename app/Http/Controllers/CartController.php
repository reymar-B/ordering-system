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

        if(count($orders) == 0)
        {
            dd("cart empty");
        }

            foreach($orders as $order)
            {
                $order = $order;
            }

            $price = $order ? $order->menu->pluck('price'):0;

            $myArray = json_decode(json_encode($price), true);

            $sum = array_reduce($myArray, function($i, $obj)
            {
                return $i += $obj;
            });
            return view('cart')->with('orders', $orders)->with('sum', $sum);
    }

}
