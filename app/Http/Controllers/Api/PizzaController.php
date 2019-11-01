<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
   
    public function getAllPizza()
    {
        return  Pizza::all();
    }
 
    public function getOnePizza($id)
    {
        return Pizza::find($id);
    }

}
