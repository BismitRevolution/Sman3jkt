@extends('admin.layout.master')

@section('title') Admin Login @endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
@endsection

@section('content')
<div class="container">
<div class="jumbotron mx-auto">
    <h2 class="title text-center">Login</h2>

    <form method="post" action="{{ url('/admin/login') }}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="username" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>

        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
        <div class="submit-button text-center">
            <button class="btn btn-success" type="submit">Login</button>
        </div>
    </form>
</div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/admin-login.js') }}"></script> -->
@endsection
