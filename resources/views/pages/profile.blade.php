@extends('layout.master')
@section('title', 'Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
<div id="visi" class="fullpage full-height white color-gra">
    <div class="container">
        <div class="row">
            <div class="col vertical-center">
                <div class="py-5">
                    <h1 class="text-center">Visi</h1>
                    <br>
                    <p class="lead text-center">“Menjadi SMA Teladan, berwawasan global, menghasilkan lulusan berkarakter yang cerdas, berbudaya, kreatif, mandiri, unggul dalam iptek berlandaskan imtaq”</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="visi" class="fullpage full-height white color-gra">
    <div class="container">
        <div class="row vertical-center">
            <div class="col">
                <div class="py-5">
                    <h1 class="text-center">Misi</h1>
                    <br>
                    <div class="lead text-center" style="text-align: justify">
                        <ul>
                            <li>Meningkatkan kualitas imtaq warga sekolah</li>
                            <li>Menguatkan karakter dan budaya warga sekolah</li>
                            <li>Meningkatkan kualitas SDM semua komponen sekolah yang berwawasan global</li>
                            <li>Meningkatkan efektivitas pembelajaran dan inovasi di bidang pendidikan</li>
                            <li>Meningkatkan ketrampilan dalam menjaga lingkungan sekolah sehat</li>
                            <li>Membangkitkan semangat kompetisi warga sekolah untuk menjadi unggul</li>
                            <li>Menerapkan prinsip-prinsip transparansi dan akuntabilitas dalam manajemen sekolah</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="visi" class="fullpage full-height white color-gra">
    <div class="container">
        <div class="row vertical-center">
            <div class="col">
                <div class="py-5">
                    <h1 class="text-center">Sejarah</h1>
                    <br>
                    <div class="lead text-center" style="text-align: justify">
                        <small>Cikal bakal SMA Negeri 3 Jakarta sesungguhnya adalah Sekolah VHC yang didirikan pada tahun 1950, yang terdiri dari 2 sekolah. Salah satunya diberi nama SMA Istimewa yang kemudian berubah nama menjadi SMA V ABC. SMA V ABC selanjutnya dipecah menjadi 2 juga, yang salah satunya diberi nama SMA II B yang terletak di Jalan Batu. Pada tahun 1954 SMA II B pindah ke Jalan Setiabudi II yang selanjutnya telah selesai dibangun pada tahun 1953. Sekolah ini kemudian dijadikan model  dan diber nama SMA Teladan Bagian B yang selanjutnya populer dengan nama SMA 3 Teladan.</small>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="visi" class="fullpage full-height white color-gra">
    <div class="container">
        <div class="row vertical-center">
            <div class="col">
                <div class="py-5">
                    <h1 class="text-center">Lambang</h1>
                    <br>
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('img/logo_transparent.png') }}" alt="" style="height: 200px;">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="visi" class="fullpage full-height white color-gra">
    <div class="container">
        <div class="row vertical-center">
            <div class="col">
                <div class="py-5">
                    <h1 class="text-center">Identitas Sekolah</h1>
                    <br>
                    <div class="col-md-12 text-center" style="text-align: justify;">
                        <ul>
                            <li>NPSN            :   20102216</li>
                            <li>Nama Sekolah    :   SMA Negeri 3 Jakarta</li>
                            <li>Tipe Sekolah    :   A</li>
                            <li>Alamat          :   Jalan Setiabudi II</li>
                            <li>Kelurahan       :   Setia Budi</li>
                            <li>Kecamatan       :   Setia Budi</li>
                            <li>Kota            :   Jakarta Selatan</li>
                            <li>Provinsi        :   DKI Jakarta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection