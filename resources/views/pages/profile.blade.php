@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-md-12">
            <h2>Visi & Misi</h2>
        </div>
        <div class="col-md-12">
            <h5>Visi</h5>
            <p>“Menjadi SMA Teladan, berwawasan global, menghasilkan lulusan berkarakter yang cerdas, berbudaya, kreatif, mandiri, unggul dalam iptek berlandaskan imtaq”</p>
        </div>
        <div class="col-md-12">
            <h5>Misi</h5>
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
    <hr>
    <div class="row my-3">
        <div class="col-md-12">
            <h2>Sejarah</h2>
        </div>
        <div class="col-md-12">
            <p style="text-align: justify;">
                Cikal bakal SMA Negeri 3 Jakarta sesungguhnya adalah Sekolah VHC yang didirikan pada tahun 1950, yang terdiri dari 2 sekolah. Salah satunya diberi nama SMA Istimewa yang kemudian berubah nama menjadi SMA V ABC. SMA V ABC selanjutnya dipecah menjadi 2 juga, yang salah satunya diberi nama SMA II B yang terletak di Jalan Batu. Pada tahun 1954 SMA II B pindah ke Jalan Setiabudi II yang selanjutnya telah selesai dibangun pada tahun 1953. Sekolah ini kemudian dijadikan model  dan diber nama SMA Teladan Bagian B yang selanjutnya populer dengan nama SMA 3 Teladan.
                Perjalanan panjang SMA Negeri 3 Jakarta memberikan catatan tentang pasang surut pengalaman sekolah ini dan upayanya untuk bangkit kembali dari keterpurukannya. Rayonisasi yang dimulai pada sekitar tahun 1980-an secara perlahan menurunkan prestasi SMA Negeri 3 yang dikenal telah menghasilkan tokoh-tokoh nasional dalam berbagai bidang, secara perlahan mulai disalip oleh sekolah-sekolah lain di seantero Jakarta. Namun upaya untuk bangkit kembali senantiasa digelorakan oleh stakeholders yang merasa bertanggung jawab terhadap masa depan SMA Negeri 3 termasuk para alumni yang tergabung dalam berbagai komunitas. Hasilnya selama 3 tahun terakhir, jumlah siswa SMA Negeri 3 yang diterima PTN meningkat secara signifikan. Pada Tahun 2000 sekolah ini ditunjuk oleh Direktorat Pendidikan Menengah Umum sebagai salah satu model sekolah dengan Kurikulum Berbasis Kompetensi (KBK). Selanjutnya karena dipandang sebagai sekolah yang bersejarah serta memiliki kesiapan sarana dan prasarana, maka pada tahun 2009 sekolah ini ditetapkan oleh Direktorat Pendidikan Menengah Umum sebagai Rintisan Sekolah Bertaraf Internasional (RSBI).
                Visi dan misi SMA Negeri 3 Jakarta, yaitu menjadi SMA Teladan, bertaraf internasional dan menghasilkan tunas-tunas bangsa yang unggul dalam imtaq, di bidang akademis dan nun akademis serta berbudi pekerti luhur, menjadi semangat dalam upaya mencetak tamatan yang kompeten dan mampu bersaing dalam kancah global/internasional. Upaya sungguh-sungguh untuk bangkit dari keterpurukan membuahkan hasil yang menggemberikan dengan hasil ujian Nasional yang dari tahun ke tahun menunjukkan peningkatan yang signifikan. Begitu pula jumlah siswa SMA Negeri 3 yang diterima di Perguruan Tinggi Negeri dari tahun ke tahun juga mengalami peningkatan, termasuk yang diterima di Perguruan Tinggi luar negeri.
                Keberhasilan-keberhasilan di atas membawa dampak yang sangat positif bagi SMA Negeri 3. Minat lulusan SMP untuk melanjutkan pendidikan di SMA Negeri 3 masih cukup besar. Hal ini memotivasi manajemen SMA Negeri 3 untuk senantiasa meningkatkan kualitas pendidikan di sekolah ini. Salah satu upaya yaitu dengan meningkatkan layanan kepada peserta didik dan masyarakat pada umumnya, SMA Negeri 3 Jakarta telah meraih sertifikat ISO 9001:2008 sejak tahun 2010.
                SMA Negeri 3 Jakarta adalah sekolah dengan lahan yang sangat luas, yaitu mencapai 1 hektar serta memiliki 27 rombongan belajar dengan jumlah siswa sebanyak 972 siswa. Potensi yang sangat besar ini menjadi tantangan tersendiri, yaitu bagaimana mendayagunakan fasilitas serta SDM yang tersedia tersebut sehingga meningkatkan kinerja SMA Negeri 3 Jakarta.
                Sarana dan Prasarana yang memadai serta siswa yang sangat potensial khususnya di bidang kepemimpinan, olahraga dan kesenian, dapat dijadikan modal dasar yang besar dalam mengembangkan SMA Negeri 3 Jakarta. Selain itu, sejarah SMA Negeri 3 yang mampu mencetak sejumlah pimpinan nasional dalam berbagai bidang serta pekerja kesenian yang sangat berprestasi di tingkat nasional maupun internasional menunjukkan bahwa sekolah ini adalah sekolah yang mampu menghasilkan lulusan yang memiliki daya saing yang tinggi.
                Tantangan eksternal berupa arus globalisasi dan berbagai isu yang terkait dengan masalah lingkungan hidup, kemajuan teknologi dan informasi kebangkitan industri kreatif dan budaya, dan perkembangan pendidikan di tingkat internasional khusunya ASEAN Free Trade Are (AFTA) harus segera diantisipasi sejak sekarang.
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h2>Lambang SMAN 3 Jakarta</h2>
        </div>
        <div class="col-md-12 text-center">
            <img src="{{ asset('img/sman3_logo.png') }}" alt="" style="height: 200px;">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h2>Identitas Sekolah</h2>
        </div>
        <div class="col-md-12">
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
@endsection

@section('extra-js')
    <script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
