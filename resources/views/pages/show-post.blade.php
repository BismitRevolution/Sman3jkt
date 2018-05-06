@extends('layout.master')

@section('title', 'Berita dan Acara')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="container align-self-center">
        <div class="heading dark col-sm-12" style="margin-top: 30px; margin-bottom: 30px;">
            <h1 class="col-sm-12" style="font-weight: bold;">{{ $post->title }}</h1>
        </div>
        <div class="col-sm-12" style="width: 100%; height: 450px; background-image: url('{{ $post->image }}'); background-size: cover;">
        </div>
        <div class="paragraf col-sm-12" style="margin-top: 30px;">
            <p class="col-sm-12" style="text-align: justify; text-justify: inter-word;">{{ $post->content }}</p>
        </div>
        <div class="action col-sm-12 text-center" style="margin-bottom: 45px;">
            <a href="{{ $post->attachment }}" class="btn btn-outline-info" target="_blank">Download Attachment</a>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
