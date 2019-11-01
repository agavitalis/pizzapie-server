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

    public function manageOrder($id = null)
    {
        return view('admin.manageOrder');
    }
}
