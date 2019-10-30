<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPizza()
    {
        return view('admin.addPizza');
    }

    public function managePizza()
    {
        return view('admin.managePizza');
    }

    public function viewOrders()
    {
        return view('admin.viewOrders');
    }

    public function manageOrder($id = null)
    {
        return view('admin.manageOrder');
    }

}
