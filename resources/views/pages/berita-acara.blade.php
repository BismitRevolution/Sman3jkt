@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row" style="margin-top: 35px; margin-bottom: 35px;">
        <div class="heading col-sm-8 semi-dark">
            <h1 class="col-sm-12">Acara dan Kegiatan</h1>
        </div>
        <div class="col-sm-4"></div>
    </div>

    @foreach ($posts as $post)
    <div class="post shadow-bottom col-12 row">
        <div class="trailer hover-parent col-xs-12 col-sm-4 col-lg-3">
            <div class="hover-child" style="background-image: url('{{ $post->image }}');">
                <a href="#" class="white">Description</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-lg-9 row">
            <div class="heading col-sm-12">
                <a href="#" style="font-size: 1.6em; font-weight: bold;">{{ $post->title }}</a>
            </div>
            <div class="paragraf col-sm-12">
                <p>{{ $post->content }}</p>
            </div>
            <div class="action col-sm-12">
                <form method="get" action="{{ route('show-post') }}">
                    {{ csrf_field() }}
                    <input name="post_id" value="{{ $post->post_id }}" type="hidden">
                    <button class="btn btn-outline-primary" type="submit">Selengkapnya</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
