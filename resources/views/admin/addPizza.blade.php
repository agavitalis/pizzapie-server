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
                <div class="card-header bg-white border-primary">{{ __('Add Pizza') }}</div>
                <div class="card-body">
                    <form  action="/addPizza" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Pizza Name</label>
                            <input type="text" class="form-control" name="name" required
                                 placeholder="Enter Pizza Name">
                            <small id="nameHelp" class="form-text text-muted">A good name, entices customers</small>
                        </div>
                        <div class="form-group">
                            <label for="price">Pirce</label>
                            <input type="number" class="form-control" name="price" required
                                placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="pizza_category">Select Category</label>
                            <select class="form-control" name="pizza_category" required>
                                <option value="" selected disabled >Categorize this Pizza</option>
                                <option value="Rich Yummy Pie">Rich Yummy Pie</option>
                                <option value="Chocolate Flavor Yummy">Chocolate Flavor Yummy</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="pizza_picture">Select Pizza Picture</label>
                            <input type="file" class="form-control-file" name="pizza_picture" required>
                            <small id="nameHelp" class="form-text text-muted">A good picture will be awesome</small>
                        </div>
                                   
                        <button type="submit" class="btn btn-primary">Add Pizza</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection