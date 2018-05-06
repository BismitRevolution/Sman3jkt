@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
@endsection

@section('content')
<div id="visi" class="white color-gra">
    <div class="container">
        <div class="row d-flex content-med">
            <div class="col-12 align-self-center">
                <h1 class="header text-center">VISI</h1>
                <h5 class="paragraf text-center" style="line-height: 1.5;">Menjadi SMA Teladan, berwawasan global, menghasilkan lulusan berkarakter yang cerdas, berbudaya, kreatif, mandiri, unggul dalam iptek berlandaskan imtaq</h5>
                <h1 class="header text-center">MISI</h1>
                <div id="textSlider" class="row">
                    <div class="col-12 slideCol text-center">
                        <div class="paragraf scroller">
                            <div class="inner">
                                <p>Meningkatkan kualitas imtaq warga sekolah<br/><br/></p>
                                <p>Meningkatkan kualitas SDM semua komponen<br/>sekolah yang berwawasan global</p>
                                <p>Meningkatkan efektivitas pembelajaran dan<br/>inovasi di bidang pendidikan</p>
                                <p>Meningkatkan ketrampilan dalam menjaga<br/>lingkungan sekolah sehat</p>
                                <p>Membangkitkan semangat kompetisi warga<br/>sekolah untuk menjadi unggul</p>
                                <p>Menerapkan prinsip-prinsip transparansi dan<br/>akuntabilitas dalam manajemen sekolah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="onboard" class="fullpage bg-dark white container-fluid row text-center align-self-center">
    <div class="item col-4">
        <div>
            <img src="{{ asset('img/logo_transparent.png') }}" style="max-height: 150px;">
        </div>
    </div>
    <div class="item col-8">
        <div class="heading text-center">
            <h5>Lambang SMA Negeri 3 Jakarta</h5>
        </div>
    </div>
</div>

<div id="sejarah" class="white color-gra">
    <div class="container">
        <div class="row d-flex content-full hideme">
            <div class="col-12 align-self-center">
                <div class="heading">
                    <h1 class="text-center">SEJARAH</h1>
                </div>
                <div class="paragraf">
                    <p>Cikal bakal SMA Negeri 3 Jakarta sesungguhnya adalah Sekolah VHC yang didirikan pada tahun 1950, yang terdiri dari 2 sekolah. Salah satunya diberi nama SMA Istimewa yang kemudian berubah nama menjadi SMA V ABC. SMA V ABC selanjutnya dipecah menjadi 2 juga, yang salah satunya diberi nama SMA II B yang terletak di Jalan Batu. Pada tahun 1954 SMA II B pindah ke Jalan Setiabudi II yang selanjutnya telah selesai dibangun pada tahun 1953. Sekolah ini kemudian dijadikan model  dan diber nama SMA Teladan Bagian B yang selanjutnya populer dengan nama SMA 3 Teladan.</p>
                    <p>Perjalanan panjang SMA Negeri 3 Jakarta memberikan catatan tentang pasang surut pengalaman sekolah ini dan upayanya untuk bangkit kembali dari keterpurukannya. Rayonisasi yang dimulai pada sekitar tahun 1980-an secara perlahan menurunkan prestasi SMA Negeri 3 yang dikenal telah menghasilkan tokoh-tokoh nasional dalam berbagai bidang, secara perlahan mulai disalip oleh sekolah-sekolah lain di seantero Jakarta. Namun upaya untuk bangkit kembali senantiasa digelorakan oleh stakeholders yang merasa bertanggung jawab terhadap masa depan SMA Negeri 3 termasuk para alumni yang tergabung dalam berbagai komunitas. Hasilnya selama 3 tahun terakhir, jumlah siswa SMA Negeri 3 yang diterima PTN meningkat secara signifikan. Pada Tahun 2000 sekolah ini ditunjuk oleh Direktorat Pendidikan Menengah Umum sebagai salah satu model sekolah dengan Kurikulum Berbasis Kompetensi (KBK). Selanjutnya karena dipandang sebagai sekolah yang bersejarah serta memiliki kesiapan sarana dan prasarana, maka pada tahun 2009 sekolah ini ditetapkan oleh Direktorat Pendidikan Menengah Umum sebagai Rintisan Sekolah Bertaraf Internasional (RSBI).</p>
                    <p>Visi dan misi SMA Negeri 3 Jakarta, yaitu menjadi SMA Teladan, bertaraf internasional dan menghasilkan tunas-tunas bangsa yang unggul dalam imtaq, di bidang akademis dan nun akademis serta berbudi pekerti luhur, menjadi semangat dalam upaya mencetak tamatan yang kompeten dan mampu bersaing dalam kancah global/internasional. Upaya sungguh-sungguh untuk bangkit dari keterpurukan membuahkan hasil yang menggemberikan dengan hasil ujian Nasional yang dari tahun ke tahun menunjukkan peningkatan yang signifikan. Begitu pula jumlah siswa SMA Negeri 3 yang diterima di Perguruan Tinggi Negeri dari tahun ke tahun juga mengalami peningkatan, termasuk yang diterima di Perguruan Tinggi luar negeri.</p>
                    <p>Keberhasilan-keberhasilan di atas membawa dampak yang sangat positif bagi SMA Negeri 3. Minat lulusan SMP untuk melanjutkan pendidikan di SMA Negeri 3 masih cukup besar. Hal ini memotivasi manajemen SMA Negeri 3 untuk senantiasa meningkatkan kualitas pendidikan di sekolah ini. Salah satu upaya yaitu dengan meningkatkan layanan kepada peserta didik dan masyarakat pada umumnya, SMA Negeri 3 Jakarta telah meraih sertifikat ISO 9001:2008 sejak tahun 2010.</p>
                    <p>SMA Negeri 3 Jakarta adalah sekolah dengan lahan yang sangat luas, yaitu mencapai 1 hektar serta memiliki 27 rombongan belajar dengan jumlah siswa sebanyak 972 siswa. Potensi yang sangat besar ini menjadi tantangan tersendiri, yaitu bagaimana mendayagunakan fasilitas serta SDM yang tersedia tersebut sehingga meningkatkan kinerja SMA Negeri 3 Jakarta.</p>
                    <p>Sarana dan Prasarana yang memadai serta siswa yang sangat potensial khususnya di bidang kepemimpinan, olahraga dan kesenian, dapat dijadikan modal dasar yang besar dalam mengembangkan SMA Negeri 3 Jakarta. Selain itu, sejarah SMA Negeri 3 yang mampu mencetak sejumlah pimpinan nasional dalam berbagai bidang serta pekerja kesenian yang sangat berprestasi di tingkat nasional maupun internasional menunjukkan bahwa sekolah ini adalah sekolah yang mampu menghasilkan lulusan yang memiliki daya saing yang tinggi.</p>
                    <p>Tantangan eksternal berupa arus globalisasi dan berbagai isu yang terkait dengan masalah lingkungan hidup, kemajuan teknologi dan informasi kebangkitan industri kreatif dan budaya, dan perkembangan pendidikan di tingkat internasional khusunya ASEAN Free Trade Are (AFTA) harus segera diantisipasi sejak sekarang.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/profile.js') }}"></script>
@endsection
