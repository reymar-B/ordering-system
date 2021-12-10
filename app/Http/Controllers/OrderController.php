<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Order;
use App\Models\User;
use App\Models\MenuOrder;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $data = session()->get('categoryId');

        $menus = $data == 0 ? Menu::with('menuCategory')->get(): Menu::where('menu_category_id', $data)->get();

        $categories = MenuCategory::with('menus')->get();

        session()->forget('categoryId');

        return view('order')->with( 'menus', $menus)->with('categories', $categories);

    }


    public function showCategory(Request $request)
    {
        session(['categoryId' => $request->category]);

        return redirect('orders');

    }


    public function store(Request $request)
    {

        $user = Auth::user();

        $order = Order::firstOrCreate(

            ['user_id' => $user->id, 'isServed' => 0]

        );

        $order->save();

        $orderId = Order::where('user_id', $user->id)->orderByDesc('updated_at')->first();

        MenuOrder::create(

            [ 'menu_id' => $request->menuId, 'order_id' => $orderId->id, 'qty' => 1 ]

        );

        return redirect('orders');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
