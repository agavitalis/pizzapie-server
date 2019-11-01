<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function checkOut(Request $request)
    {
        //generate a new order code
        $order_code =  Order::generateOrderCode();

        foreach ($request->cart as $pizza) {
            Order::create(['user'=>1,'first_name'=>$request->first_name,'last_name'=>$request->last_name,
            'email'=>$request->email,'address'=>$request->address,'state'=>"ddd",
            'country'=>$request->country,'pizza'=>$pizza['name'],'quantity'=>$pizza['quantity'],
            'price'=>$pizza['price'],'order_code'=>$order_code]);
        }
        return response()->json(['message' => 'Order well received','status'=>200]);
    }
}
