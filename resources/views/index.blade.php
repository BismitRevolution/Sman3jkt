@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div id="home-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1"></li>
        <li data-target="#home-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="{{ asset('img/photos/landscape_1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Siap berprestasi</h1>
                <p>Kami membimbing siswa agar terus berprestasi sesuai potensi yang dimiliki</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="{{ asset('img/photos/landscape_2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Semangat berprestasi</h1>
                <p>Siswa-siswa berprestasi dari berbagai bidang lomba</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="{{ asset('img/photos/landscape_3.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Semangat lomba dan berkompetisi</h1>
                <p>Berbagai prestasi berhasil dicetak dalam berbagai lomba yang telah diikuti</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="onboard" class="fullpage bg-dark white container-fluid row">
    <div class="item col-md">
        <div class="heading">
            <h5>Mengapa SMAN 3?</h5>
        </div>
        <div class="paragraf">
            <p>Karena ini sman 3 jakarta</p>
        </div>
    </div>
    <div class="item col-md">
        <div class="heading">
            <h5>Mengapa SMAN 3?</h5>
        </div>
        <div class="paragraf">
            <p>AsKarena ini sman 3 jakarta</p>
        </div>
    </div>
    <div class="item col-md">
        <div class="heading">
            <h5>Mengapa SMAN 3?</h5>
        </div>
        <div class="paragraf">
            <p>Karena ini sman 3 jakarta</p>
        </div>
    </div>
</div>

<div id="parallax-top" class="parallax-container row align-items-center" data-parallax="scroll" data-src="{{ asset('img/photos/visi.jpeg') }}">
    <div id="parallax-overlay" class="container-fluid">
        <div class="container white align-self-center">
            <div class="heading col-sm-12">
                <h1 class="col-sm-12 text-center">SARANA & PRASARANA</h1>
            </div>
            <div class="paragraf col-sm-12">
                <p class="col-sm-12 text-center">SMA Negeri 3 Jakarta memiliki berbagai fasilitas untuk menunjang kegiatan pembelajaran siswa</p>
            </div>
            <div class="paragraf col-sm-12 text-center">
                <a href="#" class="btn btn-outline-info">SELENGKAPNYA</a>
            </div>
        </div>
    </div>
</div>

<div id="event" class="container">
    <div class="row" style="margin-bottom: 35px;">
        <div class="heading col-sm-8 semi-dark">
            <h1 class="col-sm-12">Acara dan Kegiatan</h1>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <div class="row">
        <div class="post shadow-bottom col-xs-12 col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <img class="trailer col-sm-6" src="{{ asset('img/photos/visi.jpeg') }}">
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">Judul Postingan</div>
                <div class="paragraf col-sm-12">Isi postingan dalam bentuk paragraf</div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="guru" class="container">
    <div class="row" style="margin-bottom: 35px;">
        <div class="heading col-sm-8 semi-dark">
            <h1 class="col-sm-12">Acara dan Kegiatan</h1>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div> -->

<div id="sambutan" class="container-fluid full-height">
    <div class="container white align-self-center">
        <div class="heading col-sm-12">
            <h1 class="col-sm-12 text-center">SAMBUTAN KEPALA SEKOLAH</h1>
        </div>
        <div class="col-sm-12 row">
            <div class="col-sm-8">
                <div class="paragraf">Ini isi sambutannya dalam bentuk paragraf. </div>
            </div>
            <div class="col-sm-4">
                <img class="col-sm-12" src="{{ asset('img/photos/visi.jpeg') }}">
            </div>
        </div>
    </div>
</div>

<div id="visi-misi" class="fullpage dark container-fluid row align-items-center square-half-height">
    <div class="col-sm-6">
        <div class="width-80">
            <div class="heading col-sm-12 row">
                <h1 class="col-sm-6">Visi</h1>
            </div>
            <div class="paragraf col-sm-12 row">
                <p class="col-sm-6">Ini visi kita semua SMAN 3 Jakarta</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="width-80">
            <div class="heading col-sm-12 row">
                <h1 class="col-sm-6">Misi</h1>
            </div>
            <div class="paragraf col-sm-12 row">
                <p class="col-sm-6">Ini misi kita semua SMAN 3 Jakarta</p>
            </div>
        </div>
    </div>
</div>


<!-- OLD -->
<div class="container">
    <div class="row">
        <div class="col-md-4 left shadow-right">
            <div class="content">
                <table class="table table-sm table-hover">
                    <tbody>
                        <tr class="bg-dark">
                            <td colspan="2" class="text-center light">Informasi</td>
                        </tr>
                        <tr>
                            <td class="w-50">Didirikan</td>
                            <td class="w-50">1953</td>
                        </tr>
                        <tr>
                            <td>Akreditasi</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>Kepala Sekolah</td>
                            <td>Dra. Ratna Budiarti, M.Biomed</td>
                        </tr>
                        <tr>
                            <td>Jumlah Kelas</td>
                            <td>Kelas X dan XI terdiri dari 9 kelas, dan kelas XII terdiri dari 10 kelas</td>
                        </tr>
                        <tr>
                            <td>Program</td>
                            <td>IPA dan IPS</td>
                        </tr>
                        <tr>
                            <td>Rentang Kelas</td>
                            <td>X IPA, X IPS, XI IPA, XI IPS, XII IPA, XII IPS</td>
                        </tr>
                        <tr>
                            <td>Kurikulum</td>
                            <td>Kurikulum 2013</td>
                        </tr>
                        <tr>
                            <td>Jumlah Siswa</td>
                            <td>1008 siswa, (36 siswa per kelas)</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Sekolah Mandiri Standar Nasional</td>
                        </tr>
                        <tr>
                            <td>Nilai masuk terendah</td>
                            <td>8.738 (2013)</td>
                        </tr>
                        <tr>
                            <td>Nilai masuk tertinggi</td>
                            <td>9.325 (2013)</td>
                        </tr>
                        <tr>
                            <td>Nilai masuk rata-rata</td>
                            <td>8.903 (2013)</td>
                        </tr>
                        <tr class="bg-dark">
                            <td colspan="2" class="text-center light">Alamat</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>Jalan Setiabudi II, Setiabudi, Jakarta Selatan, DKI Jakarta</td>
                        </tr>
                        <tr>
                            <td>Situs web</td>
                            <td>sman3jkt.sch.id</td>
                        </tr>
                        <tr class="bg-dark">
                            <td colspan="2" class="text-center light">Motto</td>
                        </tr>
                        <tr>
                            <td>Motto</td>
                            <td>Jaya-Jayalah SMA 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Kata Sambutan -->
        <div class="col-md-8 right shadow-right">
            <div class="content" style="padding-top: 0px;">
                <div class="divider bg-dark text-center">
                    <h3 class="light"><span class="align-middle">Kata Sambutan</span></h3>
                </div>
                <div class="post">
                    <div class="row">
                        <div class="title col-sm-8">
                            <h5>Sambutan Kepala Sekolah Mengenai Peresmian Launcing Website SMA Negeri 3 Jakarta</h5>
                            <div class="summary">
                                <p>Dengan ini, saya resmikan website SMA Negeri 3 Jakarta yang baru. Diharapkan dengan adanya website ini, dapat dipergunakan sebaik-baiknya.</p>
                            </div>
                        </div>
                        <div class="img col-sm-4" style="background-image: url('/img/photos/kepala_sekolah.png'); height: 275px;"></div>
                    </div>
                </div>

                <!-- Berita -->
                <div class="divider bg-dark text-center">
                    <h3 class="light"><span class="align-middle">Berita</span></h3>
                </div>

                <div class="post">
                    <div class="row">
                        <div class="title col-sm-8">
                            <h5>Sambutan Kepala Sekolah Mengenai Peresmian Launcing Website SMA Negeri 3 Jakarta</h5>
                            <div class="summary">
                                <p>Ini contoh descripsi pendek</p>
                            </div>
                        </div>
                        <div class="img col-sm-4" style="background-image: url('/img/sman3_logo.png')"></div>
                    </div>
                </div>

                <div class="post">
                    <div class="row">
                        <div class="title col-sm-8">
                            <h5>Sambutan Kepala Sekolah Mengenai Peresmian Launcing Website SMA Negeri 3 Jakarta</h5>
                            <div class="summary">
                                <p>Ini contoh descripsi pendek</p>
                            </div>
                        </div>
                        <div class="img col-sm-4" style="background-image: url('/img/sman3_logo.png')"></div>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="divider bg-dark text-center">
                    <h3 class="light"><span class="align-middle">Foto</span></h3>
                </div>
                <div class="post">
                    <div class="row">
                        <div class="title col-sm-8">
                            <h5>Sambutan Kepala Sekolah Mengenai Peresmian Launcing Website SMA Negeri 3 Jakarta</h5>
                            <div class="summary">
                                <p>Ini contoh descripsi pendek</p>
                            </div>
                        </div>
                        <div class="img col-sm-4" style="background-image: url('/img/sman3_logo.png')"></div>
                    </div>
                </div>

                <!-- Event -->
                <div class="divider bg-dark text-center">
                    <h3 class="light"><span class="align-middle">Kegiatan</span></h3>
                </div>
                <div class="post">
                    <div class="row">
                        <div class="title col-sm-8">
                            <h5>Sambutan Kepala Sekolah Mengenai Peresmian Launcing Website SMA Negeri 3 Jakarta</h5>
                            <div class="summary">
                                <p>Ini contoh descripsi pendek</p>
                            </div>
                        </div>
                        <div class="img col-sm-4" style="background-image: url('/img/sman3_logo.png')"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/jquery.parallax.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
