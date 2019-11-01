@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 shadow-sm border-none p-3">
            @include("partials.sidebar")
        </div>
        <div class="col-md-8 offset-md-1 shadow-sm border-none p-3">
            <div class="card">
                <div class="card-header bg-white border-primary">Order Code:{{$order_code}}</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pizza</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 1; $total_price = $sub_total_price = 0; @endphp
                            @foreach($allOrders as $order)
                            <tr>
                                <th scope="row">{{$sn}}</th>
                                <td>{{$order->pizza}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->first_name}} {{$order->last_name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->state}}</td>
                                <td>{{$order->country}}</td>
                            </tr>
                            @php 
                                $sn ++; 
                                $sub_total_price = $order->price * $order->quantity;
                                $total_price = $total_price + $sub_total_price
                            @endphp
                            @endforeach
                           
                        </tbody>

                    </table>
                     <div class="text-center">
                        <p>Total Price: ${{$total_price}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
