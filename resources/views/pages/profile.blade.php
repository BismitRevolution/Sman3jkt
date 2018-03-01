@extends('layout.master')
@section('title', 'Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
@endsection
@section('content')
<div id="visi" class="white color-gra">
    <div class="container">
        <div class="row d-flex content-med">
            <div class="col-12 align-self-center">
                <h1 class="text-center">VISI</h1>
                <p class="isi text-center">“Menjadi SMA Teladan, berwawasan global, menghasilkan lulusan berkarakter yang cerdas, berbudaya, kreatif, mandiri, unggul dalam iptek berlandaskan imtaq”</p>
            </div>
        </div>
    </div>
</div>
<div id="misi" class="white color-gra">
    <div class="row d-flex content-few">
        <div class="col-12 align-self-center">
            <h1 class="text-center">MISI</h1>
            <br>
            <br>
            <div id="textSlider" class="row">
                <div class="col-12 slideCol text-center">
                    <div class="scroller">
                        <div class="inner">
                            <p>Meningkatkan kualitas imtaq warga sekolah</p>
                            <p>Meningkatkan kualitas SDM semua komponen sekolah yang berwawasan global</p>
                            <p>Meningkatkan efektivitas pembelajaran dan inovasi di bidang pendidikan</p>
                            <p>Meningkatkan ketrampilan dalam menjaga lingkungan sekolah sehat</p>
                            <p>Membangkitkan semangat kompetisi warga sekolah untuk menjadi unggul</p>
                            <p>Menerapkan prinsip-prinsip transparansi dan akuntabilitas dalam manajemen sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="sejarah" class="white color-gra">
<div class="container">
    <div class="row d-flex content-full hideme">
        <div class="col-12 align-self-center ">
            <h1 class="text-center">SEJARAH</h1>
            <p>Cikal bakal SMA Negeri 3 Jakarta sesungguhnya adalah Sekolah VHC yang didirikan pada tahun 1950, yang terdiri dari 2 sekolah. Salah satunya diberi nama SMA Istimewa yang kemudian berubah nama menjadi SMA V ABC. SMA V ABC selanjutnya dipecah menjadi 2 juga, yang salah satunya diberi nama SMA II B yang terletak di Jalan Batu. Pada tahun 1954 SMA II B pindah ke Jalan Setiabudi II yang selanjutnya telah selesai dibangun pada tahun 1953. Sekolah ini kemudian dijadikan model  dan diber nama SMA Teladan Bagian B yang selanjutnya populer dengan nama SMA 3 Teladan.</p>
        </div>
    </div>
</div>
</div>
<div id="lambang" class="dark color-gra">
<div class="container">
    <div class="row d-flex content-few">
        <div class="col-12 align-self-center text-center hideme">
            <h1 class="text-center">LAMBANG</h1>
            <br>
            <img src="{{ asset('img/logo_transparent.png') }}" alt="" style="height: 200px;">
        </div>
    </div>
</div>
</div>
@endsection
@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/profile.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/slick.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
@endsection