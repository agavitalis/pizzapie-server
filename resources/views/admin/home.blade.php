@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 shadow-sm border-none p-3">
            @include("partials.sidebar")
        </div>
        <div class="col-md-8 offset-md-1 shadow-sm border-none p-3">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="jumbotron">
                    <h1 class="display-4">Hello, {{Auth::user()->name}}!</h1>
                    <p class="lead">Welcome to Pizza-Pie Admin End. Where testy yoummy pizza are created!!</p>
                    <hr class="my-4">
                    <p>At this end, you can add and remove pizzas, and also manage pizza orders.</p>
                    <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
