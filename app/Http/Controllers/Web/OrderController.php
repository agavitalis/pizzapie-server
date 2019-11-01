<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function viewOrders()
    {
        $allOrders = Order::paginate(5);
        return view('admin.viewOrders',compact('allOrders'));
    }

    public function markDelievered(Request $request){

        Order::where(['id' => $request->id])->update(['order_status'=>1]);
        return response()->json(array('message' => 'Order Marked as Delievered'));
    }

    public function deleteOrder(Request $request){

        Order::find($request->id)->delete();
        return response()->json(array('message' => 'Order Deleted'));
    }

}
