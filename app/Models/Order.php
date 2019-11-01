<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $fillable = [
        'user','first_name','last_name','email','address','country','state','pizza', 'quantity','price','order_code'
    ];

    public static function generateOrderCode()
    {
        $order_code = Str::random(6);
        return $order_code;
    }
}
