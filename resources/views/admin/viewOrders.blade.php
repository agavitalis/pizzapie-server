@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 shadow-sm border-none p-3">
            @include("partials.sidebar")
        </div>
        <div class="col-md-8 offset-md-1 shadow-sm border-none p-3">
            <div class="card">
                <div class="card-header bg-white border-primary">{{ __('Manage Pizza') }}</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Pizza</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 1 @endphp
                            @foreach($allOrders as $order)
                            <tr>
                                <th scope="row">{{$sn}}</th>
                                <td>{{$order->first_name}} {{$order->last_name}}</td>
                                <td>{{$order->pizza}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item deliver-order"  data-id="{{$order->id}}" data-toggle="modal" data-target="#" href="#">Mark as Delievered</a>         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item delete-order" href="#" data-id="{{$order->id}}" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $sn ++ @endphp
                            @endforeach
                           
                        </tbody>
                    </table>
                    <div class="text-center">
                        <?php echo $allOrders->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection