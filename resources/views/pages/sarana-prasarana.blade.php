@extends('layout.master')
    
@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <h2>Sarana & Prasarana</h2>
        </div>

        <div class="col-md-12">
            <h5>Fasilitas</h5>
            <ul>
                <li>Kelas (27 Rombel)</li>
                <li>Laboratorium</li>
                <li>Lapangan</li>
                <li>Masjid</li>
                <li>Studio Music</li>
                <li>Ruang Audio Visual</li>
                <li>Gedung Serbaguna</li>
                <li>Ruang UKS</li>
                <li>Ruang Komite</li>
                <li>Ruang OSIS & MPK</li>
                <li>Ruang Koperasi</li>
                <li>Taman</li>
                <li>Gazebo</li>
                <li>Green House</li>
                <li>Ruang Komposting</li>
                <li>Kolam Ikan</li>
                <li>Kolam Air Mancur</li>
                <li>Kantin</li>
                <li>Wastafel</li>
                <li>Pos Satpam</li>
                <li>Rumah Jaga</li>
                <li>Mobil Sekolah</li>                
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5>Perpustakaan</h5>
        </div>
    </div>
    <hr>

    <div class="row my-3">
        <div class="col-md-12">
            <h2>Akses dan Lingkungan</h2>
        </div>
        <div class="col-md-12">
            <p style="text-align: justify;">
                SMA Negeri 3 Jakarta yang terletak di Jalan Setiabudi II Jakarta Selatan berada di dekat kawasan perkantoran dengan diapit oleh 2 jalan protokol yaitu Jalan Jenderal Sudirman dan Jalan HR Rasuna Said. Akses ke SMA Negeri 3 Jakarta sangat mudah dilalui, bisa dengan kendaraan pribadi serta berbagai akses angkutan umum yang terintegrasi yaitu Jalur Busway, Jalur MRT dan LRT
            </p>
        </div>
        <div class="col-md-12 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4075886252112!2d106.82321661529025!3d-6.209850562557707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4045e9b749b%3A0xb56a59bdfcbaa19a!2sSMA+Negeri+3+Jakarta!5e0!3m2!1sen!2sid!4v1518863401120" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
    <script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
