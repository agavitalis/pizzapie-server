<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user','first_name','last_name','email','address','country','state','pizza', 'quantity','price','order_code'
    ];
}
