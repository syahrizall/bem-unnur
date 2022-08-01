@extends('layouts.master_front')
@section('title', 'BEM REMA UNNUR - KABINET HUGO ELECTRA')
@section('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
<script src="https://kit.fontawesome.com/b31e06099e.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="icon-slider owl-theme owl-carousel slider-1 mt-5">
    @foreach ($background as $row)
    <div class="carousel-inner">
        <img src="{{asset('database/images/background/'.$row->gambar)}}" width="100%" height="600px"
            style="filter:brightness(25%);" />
        <div class="caption">Selamat Datang di Website BEM REMA UNNUR {{$kabinet->tahun_periode}} KABINET
            {{$kabinet->nama}}</div>
    </div>
    @endforeach
</div>

<div class="bg-content">
    <img src="{{asset('guest/assets/images/beranda-1.jpg')}}" />
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <h1>PROFIL</h1>
        </div>
        <div class="col-6 col-md-4 col-xl-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>Profil Kami</span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>Visi & Misi</span>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-4">
            <a href="{{url('/profil')}}" style="text-decoration:none; color:white;">
                <div class="box-profil rounded shadow mt-3">
                    <span>Struktur Kabinet</span>
                </div>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 text-beranda">
            <h1>KEMENTERIAN</h1>
        </div>
        <div class="col-10">
            <div class="box-kementerian rounded shadow text-center mt-3">
                <h4>Badan Eksekutif Mahasiswa Universitas Nurtanio Bandung Memiliki {{$jumlahKementerian}} Kementrian
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div id="owl-demo" class="owl-carousel owl-theme mt-5">
            @foreach ($menteri as $row)
            <div class="item col-12 col-md-6 col-xl-4">
                <div class="box-mentri shadow text-center">
                    <img src="{{asset('database/images/kabinet/logo/'.$kabinet->gambar_logo)}}"
                        style="width:60px; height:80px; margin:auto;" />
                    <h4>{{$row->nama}}</h4>
                    <p>KABINET {{$kabinet->nama}}</p>
                    <p>BEM REMA UNNUR</p>
                    <p>{{$kabinet->tahun_periode}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center text-light text-ormawa">
        <h1>ORMAWA DAN UKM</h1>
    </div>
</div>
<div class="d-flex justify-content-center text-center mt-2">
    <div class="bg-ormawa shadow">
        <h4>Mau tau ORMAWA dan UKM di Universitas Nurtanio Bandung?</h4>
        <div class="row mt-4">
            <div class="col-2">
                <img src="{{asset('database/images/ormawa/'.$bemfaOne->gambar_logo)}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('database/images/ormawa/'.$bemfaTwo->gambar_logo)}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('database/images/ormawa/'.$himaOne->gambar_logo)}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('database/images/ormawa/'.$himaTwo->gambar_logo)}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('database/images/ormawa/'.$ukmOne->gambar_logo)}}" width="120px" height="120px" />
            </div>
            <div class="col-2">
                <img src="{{asset('database/images/ormawa/'.$ukmTwo->gambar_logo)}}" width="120px" height="120px" />
            </div>
        </div>
        <div class="btn-showall mt-4">
            <a href="{{url('/ormawa')}}">
                <button class="btn shadow">Lihat Selengkapnya <i class="fa-solid fa-angle-right"
                        style="position:relative; top:2px; margin-left:5px;"></i></button>

            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row text-center text-light text-news">
        <h1>NEWS</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-xl-4 img-news margin-card">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-1.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Universitas Nurtanio Bandung Peduli - KKN dan Bakti Sosial</p>
            </div>
            <div class="col-12 col-xl-4 img-news margin-card">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-2.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Lomba IT Days 2022 BEM Fakultas Ilmu Komputer dan Informatika</p>
            </div>
            <div class="col-12 col-xl-4 img-news margin-card">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-3.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>OPREC STAFF NURTANIO ESPORT - Universitas Nurtanio Bandung mengadakan OPREC</p>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-12 col-xl-4 img-news margin-card">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-4.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Accounting Competition - Himpunan Mahasiswa Fakultas Akuntasi</p>
            </div>
            <div class="col-12 col-xl-4 img-news margin-card">
                <a href="{{url('/news')}}" style="text-decoration:none;">
                    <div class="image shadow">
                        <img src="{{asset('guest/assets/images/news-5.jpeg')}}" alt="Bricks" width="300px"
                            height="400px" />
                        <div class="image-text"></div>
                    </div>
                </a>
                <p>Acara Gebyar LLDIKTI WILAYAH 4</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(".icon-slider").owlCarousel({
    items: 1,
    margin: 18,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"]
});
$("#owl-demo").owlCarousel({
    margin: 18,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        576: {
            items: 2,
            nav: false
        },
        1200: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});
</script>
@endsection