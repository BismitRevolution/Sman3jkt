@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="container">

        <div class="row pt-5">
            <div class="col-md-12">
                <h1>Staf dan Manajemen</h1>
            </div>
            <div class="col-md-12">
                <hr>
            </div>   
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <h2>Sambutan Kepala Sekolah</h2>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem, obcaecati quasi nihil accusamus maiores ratione mollitia itaque facilis unde non beatae repellat quo adipisci dignissimos! Vitae quod adipisci expedita doloribus facere porro vero! Ducimus a, provident laborum culpa, cum eius dolor voluptatum expedita tempora quia voluptates molestias ut ipsam, optio debitis doloremque! Laborum debitis eligendi, laboriosam possimus architecto, ducimus adipisci sit maiores quisquam beatae tenetur quia iste, quo unde doloremque est numquam. Quas quasi tempora ullam, architecto reprehenderit. Fuga, delectus consequatur cupiditate quod blanditiis placeat. Ipsa vel libero illum tempora suscipit, ducimus quidem, temporibus perferendis, veniam voluptas quod optio!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Struktur Organisasi</h2>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-12">
                <img class="img-responsive" style="width:100%;" src="{{ asset('img/photos/struktur-organisasi.jpg') }}" alt="">
            </div>
        </div>

    </div>
@endsection

@section('extra-js')
    <script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
