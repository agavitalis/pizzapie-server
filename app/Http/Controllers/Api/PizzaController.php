<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
   
    public function getAll()
    {
        return Pizza::all();
    }
 
    public function getOne($id)
    {
        return Pizza::find($id);
    }

}
