@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">

        <div class="row pt-5">
            <div class="col-md-12">
                <h1>Akademik</h1>
            </div>
            <div class="col-md-12">
                <hr>
            </div>   
        </div>

    </div>
@endsection

@section('extra-js')
    <script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
