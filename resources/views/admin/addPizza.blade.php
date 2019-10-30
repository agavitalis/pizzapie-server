@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 shadow-sm border-none p-3">
            @include("partials.sidebar")
        </div>
        <div class="col-md-8 offset-md-1 shadow-sm border-none p-3">
            <div class="card">
                <div class="card-header bg-white border-primary">{{ __('Add Pizza') }}</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Pizza Name</label>
                            <input type="text" class="form-control" id="name"
                                 placeholder="Enter Pizza Name">
                            <small id="nameHelp" class="form-text text-muted">A good name, entices customers</small>
                        </div>
                        <div class="form-group">
                            <label for="price">Pirce</label>
                            <input type="text" class="form-control" id="price"
                                placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="pizza_category">Select Category</label>
                            <select class="form-control" id="pizza_category">
                                <option value="" selected disabled >Categorize this Pizza</option>
                                <option value="Rich Yummy Pie">Rich Yummy Pie</option>
                                <option value="Chocolate Flavor Yummy">Chocolate Flavor Yummy</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="pizza_picture">Select Pizza Picture</label>
                            <input type="file" class="form-control-file" id="pizza_picture">
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