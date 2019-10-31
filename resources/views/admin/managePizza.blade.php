@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include("partials.alert")
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
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 1 @endphp
                            @foreach($pizza as $pizza)
                            <tr>
                                <th scope="row">{{$sn}}</th>
                                <td>{{$pizza->name}}</td>
                                <td>${{$pizza->price}}</td>
                                <td>{{$pizza->category}}</td>
                                <td><img src='{{"storage/uploads/".$pizza->picture}}' alt="" height='40' width='40'></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item edit-pizza"  data-id="{{$pizza->id}}" data-toggle="modal" data-target="#" href="#">Edit</a>         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item delete-pizza" href="#" data-id="{{$pizza->id}}" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $sn ++ @endphp
                            @endforeach
                           
                        </tbody>
                    </table>
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
        <h6 class="delete-message-text">Do you really want to delete this Pizza?</h6>
        <input type="hidden" id="delete-id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope</button>
        <button type="button" class="btn btn-danger delete-confirm">Yes, Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Model -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Tab</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form  action="/updatePizza" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
            
                @csrf
                <input type="hidden" name="id" id="update_id">
                <div class="form-group">
                    <label for="name">Pizza Name</label>
                    <input type="text" class="form-control" name="name" id="name_edit" required
                            placeholder="Enter Pizza Name">
                    <small id="nameHelp" class="form-text text-muted">A good name, entices customers</small>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price_edit" required
                        placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="pizza_category">Select Category</label>
                    <select class="form-control" name="pizza_category" required>
                        <option id="category_edit"></option>
                        <option value="Rich Yummy Pie">Rich Yummy Pie</option>
                        <option value="Chocolate Flavor Yummy">Chocolate Flavor Yummy</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="pizza_picture">Select Pizza Picture</label>
                        <input type="file" class="form-control-file" name="pizza_picture">
                        <small id="nameHelp" class="form-text text-muted">A good picture will be awesome</small>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img id="edit-img" src="" alt="" width='50' height=50>
                    </div>
                </div>          
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Update Pizza</button>
            </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/managePizza.js') }}" defer></script>
@endsection