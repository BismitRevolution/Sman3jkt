@extends('layout.master')

@section('title', 'Guru')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="parallax-top" class="parallax-container row align-items-center" data-parallax="scroll" data-src="{{ asset('img/photos/guru/foto-bersama.jpg') }}">
    <div id="parallax-overlay" class="container-fluid">
        <div class="container white align-self-center">
            <div class="heading col-sm-12">
                <h1 class="col-sm-12 text-center">STAF PENGAJAR</h1>
            </div>
            <div class="paragraf col-sm-12">
                <p class="col-sm-12 text-center">Biodata dan informasi singkat staf pengajar di SMA Negeri 3 Jakarta</p>
            </div>
            <div class="action col-sm-12 text-center">
                <a href="#" class="btn btn-outline-info btn-lg">SELENGKAPNYA</a>
            </div>
        </div>
    </div>
</div>

<div id="event" class="container">
    <div class="row" style="margin-bottom: 35px;">
        <div class="heading col-sm-8 semi-dark">
            <h1 class="col-sm-12">Staf Pengajar</h1>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <div class="row">
        @foreach ($teachers as $teacher)
        <div class="post shadow-bottom col-xs-12 col-md-6 col-lg-4 row">
            <div class="trailer hover-parent col-sm-6">
                <div class="hover-child" style="background: url('img/photos/guru/{{ $teacher->photo_url }}') no-repeat center top; background-size: cover; min-height: 200px;">
                    <a href="#" class="white" style="padding: 45px;">Description</a>
                </div>
            </div>
            <div class="col-6 col-sm-6 row">
                <div class="heading col-sm-12" style="margin-top: -15px;">{{ $teacher->name }}</div>
                <!-- <div class="paragraf col-sm-12" style="font-size: 0.8em;">{{ $teacher->nip }}</div> -->
                <div class="paragraf col-sm-12" style="font-size: 0.8em;">Guru</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/jquery.parallax.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
