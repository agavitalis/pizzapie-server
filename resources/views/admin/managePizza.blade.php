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
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Order Details</a>
                                            <a class="dropdown-item" href="#">Mark as Delivered</a>         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Order Details</a>
                                            <a class="dropdown-item" href="#">Mark as Delivered</a>         
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection