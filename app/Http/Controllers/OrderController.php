<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
}

use App\Models\Order;

public function checkout() {
    $cart = session()->get('cart', []);
    $total = array_sum(array_map(function ($item) {
        return $item['price'] * $item['quantity'];
    }, $cart));

    return view('checkout', compact('cart', 'total'));
}

public function placeOrder(Request $request) {
    $cart = session()->get('cart', []);
    $total = array_sum(array_map(function ($item) {
        return $item['price'] * $item['quantity'];
    }, $cart));

    $order = new Order();
    $order->user_id = auth()->id();
    $order->cart = json_encode($cart);
    $order->total = $total;
    $order->save();

    session()->forget('cart');
    return redirect('/')->with('success', 'Order placed successfully!');
}
