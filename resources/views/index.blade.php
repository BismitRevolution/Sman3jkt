@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col">
            <!-- carousel code -->
            <div id="home-carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                    <li data-target="#home-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">

                    <!-- first slide -->
                    <div class="carousel-item active">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_1.jpg') }}" alt="First slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                TELADAN
                            </h3>
                        </div>
                    </div>

                    <!-- second slide -->
                    <div class="carousel-item">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_2.jpg') }}" alt="Second slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                INTELEKTUAL
                            </h3>
                        </div>
                    </div>

                    <!-- third slide -->
                    <div class="carousel-item">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_3.jpg') }}" alt="Third slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                ADAB
                            </h3>
                        </div>
                    </div>

                    <!-- fourth slide -->
                    <div class="carousel-item">
                        <div class="overlay-container">
                            <img class="d-block" src="{{ asset('img/photos/home_4.jpg') }}" alt="Fourth slide">
                            <div class="overlay"></div>
                        </div>
                        <div class="carousel-caption d-md-block">
                            <h3 data-animation="animated zoomIn">
                                RAMAH ANAK
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- controls -->
                <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span> -->
                </a>
                <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span> -->
                </a>
            </div>

        </div>
    </div>
</div>

<div id="onboard" class="fullpage bg-dark white container-fluid row text-center">
    <div class="item col-md">
        <div class="heading">
            <h5>SEJARAH SEKOLAH</h5>
        </div>
        <div class="paragraf">
            <p>Latar belakang, sejarah, dan kisah dibalik berdirinya SMA Negeri 3 Jakarta</p>
        </div>
        <div class="action">
            <a href="#" class="btn btn-outline-info">Selengkapnya</a>
        </div>
    </div>
    <div class="item col-md">
        <div class="heading">
            <h5>AKADEMIK SEKOLAH</h5>
        </div>
        <div class="paragraf">
            <p>Sistem akademik dan kurikulum yang diterapkan SMA Negeri 3 Jakarta</p>
        </div>
        <div class="action">
            <a href="#" class="btn btn-outline-info">Selengkapnya</a>
        </div>
    </div>
    <div class="item col-md">
        <div class="heading">
            <h5>PRESTASI SEKOLAH</h5>
        </div>
        <div class="paragraf">
            <p>Prestasi akademik, non-akademik, dan prestasi lain SMA Negeri 3 Jakarta</p>
        </div>
        <div class="action">
            <a href="#" class="btn btn-outline-info">Selengkapnya</a>
        </div>
    </div>
</div>

<div id="parallax-top" class="parallax-container row align-items-center" data-parallax="scroll" data-src="{{ asset('img/photos/visi.jpeg') }}">
    <div id="parallax-overlay" class="container-fluid">
        <div class="container white align-self-center">
            <div class="heading col-sm-12">
                <h1 class="col-sm-12 text-center">SARANA &amp; PRASARANA</h1>
            </div>
            <div class="paragraf col-sm-12">
                <p class="col-sm-12 text-center">SMA Negeri 3 Jakarta memiliki berbagai fasilitas untuk menunjang kegiatan pembelajaran siswa</p>
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
            <h1 class="col-sm-12">Acara dan Kegiatan</h1>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <div class="row">
        <div class="post shadow-bottom col-xs-12 col-md-6 row">
            <div class="trailer hover-parent col-sm-6">
                <div class="hover-child" style="background-image: url('img/photos/posts/post_1.jpg');">
                    <a href="#" class="white">Description</a>
                </div>
            </div>
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">
                    <a href="#">Juara 1 Economics Research Paper 2016 Tingkat Nasional</a>
                </div>
                <div class="paragraf col-sm-12">
                    <p>Siswa-siswi SMA Negeri 3 Teladan Jakarta kembali mengukir prestasi di ...</p>
                </div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <div class="trailer hover-parent col-sm-6">
                <div class="hover-child" style="background-image: url('img/photos/posts/post_2.jpg');">
                    <a href="#" class="white">Description</a>
                </div>
            </div>
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">
                    <a href="#">Tim Basket SMAN 3 Jakarta Mendapat Julukan "Penguasa Ibukota"</a>
                </div>
                <div class="paragraf col-sm-12">
                    <p>Sejarah kembali tercatat pada pergelaran Honda DBL DKI Jakarta Series ...</p>
                </div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <div class="trailer hover-parent col-sm-6">
                <div class="hover-child" style="background-image: url('img/photos/posts/post_3.jpg');">
                    <a href="#" class="white">Description</a>
                </div>
            </div>
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">
                    <a href="#">Kunjungan Kepala Sekolah dan Pengawas dari Daerah 3T</a>
                </div>
                <div class="paragraf col-sm-12">
                    <p>Sebanyak 200 kepala sekolah dan pengawas dari daerah 3T (tertinggal ...</p>
                </div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="post shadow-bottom col-md-6 row">
            <div class="trailer hover-parent col-sm-6">
                <div class="hover-child" style="background-image: url('img/photos/posts/post_4.jpg');">
                    <a href="#" class="white">Description</a>
                </div>
            </div>
            <div class="col-sm-6 row">
                <div class="heading col-sm-12">
                    <a href="#">Juara 1 Debat dan Artikel (KOMBI) Indonesia</a>
                </div>
                <div class="paragraf col-sm-12">
                    <p>SMAN 3 Teladan Jakarta kembali mengukir prestasi, berhasil ...</p>
                </div>
                <div class="action col-sm-12">
                    <a href="#" class="btn btn-outline-info">Selengkapnya</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="sambutan" class="container-fluid full-height">
    <div class="container white align-self-center">
        <div class="heading col-sm-12">
            <h1 class="col-sm-12 text-center">SAMBUTAN KEPALA SEKOLAH</h1>
        </div>
        <div class="col-sm-12 row">
            <div class="col-md-8">
                <div class="paragraf">
                    <p>Assalamualaikum wr wb, salam sejahtera untuk kita semua dan Salam Teladan..!</p>
                    <p>Selamat datang di website SMA 3 Teladan Jakarta.</p>
                    <p class="italic">"Siapa yang menguasai Informasi, maka dia akan menguasai dunia"</p>
                    <p>Pasti sudah banyak yang pernah mendengar kutipan di atas. Ya, di jaman sekarang teknologi informasi demikian canggih dan segala informasi bisa segera diakses secara cepat. Mungkin tidak benar-benar menguasai "dunia", namun kita tetap harus mengikuti jaman, bahwa teknologi informasi haruslah kita kuasai sebagai salah satu faktor pendukung untuk sukses.</p>
                    <p>Menurut siaran pers yang dilempar ke publik oleh menkoinfo RI, Indonesia adalah pengguna Internet terbesar ke 6 setelah China, USA, India, Brazil dan Jepang. Diperkirakan jumlah pengguna internet di Indonesia akan menggeser kedudukan Jepang di urutan ke-5, yang memang  pertumbuhan jumlah pengguna internetnya lebih lambat.</p>
                    <p>Tahun 2014 pengguna internet (netter) di Indonesia mencapai 87,7 juta orang. Sekarang diperkirakan sudah mencapai 112 juta pengguna Internet di Indonesia.</p>
                    <p>Dengan kenyataan tersebut, saya menyambut baik gagasan mengaktifkan kembali Website SMAN 3 Jakarta dan dikelola secara profesional serta harus  terus di update , karena dari sinilah kita bisa menginformasikan kepada "dunia luar" tentang prestasi SMA 3 Jakarta, bidang akademis dan non akademis, serta berbagai kegiatan kreatif siswa yang banyak dilakukan di SMA 3 Teladan ini.</p>
                    <p>Komunikasi dengan alumni, orang tua dan masyarakat luar pun bisa terus terjaga melalui Website ini.</p>
                    <p>Jangan lupa, meskipun berbagai kemudahan teknologi informasi bisa kita dapatkan hanya dengan mengklik satu jari, namun biasakan untuk selalu cek-ricek, dan berhati-hati menyebarkan informasi yang tidak akurat, hoax, maupun yang akan memancing suasana kurang baik.</p>
                    <p>Demikian dari saya, sekali lagi selamat berselancar melihat kegiatan keluarga besar Teladan di Website SMAN 3 Jakarta dan ayo kita berbagi informasi positif sebanyak-banyaknya.</p>
                    <p>Wassalamualaikum wr. wb.</p>
                    <p>Ratna Budiarti</p>
                </div>
            </div>
            <div class="col-md-4 trailer">
                <img class="d-none d-md-block col-sm-12" src="{{ asset('img/photos/guru/kepala_sekolah.jpg') }}">
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/jquery.parallax.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
