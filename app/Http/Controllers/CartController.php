<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuOrder;
use App\Models\Order;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CartController extends Controller
{

    public function getOrderLists()
    {

        $orders = Order::with('menu')->where('isServed', 0)->get();

        return $orders;

    }


    public function showCart()
    {

        $orders = $this->getOrderLists();

        $sum = $this->convertToArray($orders, 'price');

        $tax = $this->convertToArray($orders, 'tax');

        return view('cart')->with('orders', $orders)->with('sum', $sum)->with('tax', $tax);
    }


    public function convertToArray($items, $value)
    {

        if(count($items) == 0)
        {
            return 0;
        }

        foreach($items as $item)
        {
            $item = $item ? $item->menu->pluck($value):0;

            $myArray = json_decode(json_encode($item), true);

            $itemArray = array_reduce($myArray, function($i, $obj)
            {
                return $i += $obj;
            });
        }

        return $itemArray;

    }

}
