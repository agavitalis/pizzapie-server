<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrders()
    {
        return view('admin.viewOrders');
    }

    public function manageOrder($id = null)
    {
        return view('admin.manageOrder');
    }
}
