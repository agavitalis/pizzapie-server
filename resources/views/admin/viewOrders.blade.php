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
                            <th scope="col">Order No</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 1 @endphp
                            @foreach($allOrders as $order)
                            <tr>
                                <th scope="row">{{$sn}}</th>
                                <td>{{$order->first_name}} {{$order->last_name}}</td>
                                <td>{{$order->order_code}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                                <td> {{$order->order_status == 0? "Not Delievered": 'Delievered'}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/viewOrder/{{$order->order_code}}" >View Details</a>  
                                            <a class="dropdown-item deliver-order" data-order_code="{{$order->order_code}}" data-id="{{$order->id}}" data-toggle="modal" data-target="#deliverModal" >Mark Delievered</a>         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item delete-order" data-order_code="{{$order->order_code}}" data-id="{{$order->id}}" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $sn ++ @endphp
                            @endforeach
                           
                        </tbody>
                    </table>
                    <div class="text-center">
                       {{ $allOrders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Model -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h6 class="delete-message-text">Do you really want to delete this Order?</h6>
        <input type="hidden" id="delete-id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope</button>
        <button type="button" class="btn btn-danger delete-confirm">Yes, Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Deliever Model -->
<div class="modal fade" id="deliverModal" tabindex="-1" role="dialog" aria-labelledby="deliverModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mark Delievered Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h6 class="deliver-message-text">Do you really want to mark this order as delievered</h6>
        <input type="hidden" id="deliver-id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope</button>
        <button type="button" class="btn btn-danger deliver-confirm">Yes, Proceed</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/viewOrders.js') }}" ></script>
@endsection