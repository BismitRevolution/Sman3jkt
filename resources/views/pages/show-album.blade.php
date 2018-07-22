@extends('layout.master')

@section('title', 'Album')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container" style="padding-bottom: 45px;">
    @foreach ($albums as $album)
    <div class="heading dark" style="margin-top: 30px; margin-bottom: 30px;">
        <h1 class="" style="font-weight: bold;">{{ $album->title }}</h1>
    </div>
    <div class="paragraf" style="margin-top: 30px;">
        <p class="" style="text-align: justify; text-justify: inter-word;">{{ $album->description }}</p>
    </div>
    <div class="row">
        @foreach ($album->photos as $photo)
        <!-- <div class="col-sm-3" style="height: 200px; background-image: url('{{ $photo->photo_path }}'); background-size: cover;">

        </div> -->
        <a class="col-sm-3" href="{{ $photo->photo_path }}" data-lightbox="{{ $album->title }}" data-title="{{ $album->title }}">
            <div style="height: 200px; background-image: url('{{ $photo->photo_path }}'); background-size: cover;"></div>
        </a>
        <!-- <img class="col-sm-3" src="{{ $photo->photo_path }}" alt="" style="height: 200px;"> -->
        @endforeach
    </div>
    @endforeach
</div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
