<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
   
    public function getAllPizza()
    {
    

        if (strpos(URL::current(), 'api') !== false) {
           return "Request made from API";
        }

        return Pizza::all();
    }
 
    public function getOnePizza($id)
    {
        return Pizza::find($id);
    }

}
