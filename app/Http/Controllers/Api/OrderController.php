<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function getAllOrders()
    {
        return Order::all();
    }
 
    public function getOneOrder($id)
    {
        return Order::find($id);
    }
}
