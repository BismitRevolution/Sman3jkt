@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">
    	<div class="row py-2">
    		<img src="{{ asset('img/photos/guru/foto-bersama.jpg') }}" alt="">
    	</div>

    	<div class="row py-2">
    		<h1>Guru</h1>
    	</div>
        <hr>
    </div>
@endsection

@section('extra-js')
    <script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
