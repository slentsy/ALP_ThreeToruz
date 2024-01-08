{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.template')

@section('layout_content')
    <!-- bootstrap untuk icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- bootstrap penutup icon -->

    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/home.css">
    <!-- akhir panggil css file di dalam laravel -->


    <!-- START OF JUMBOTRON AKA BANNER -->
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

        {{-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div> --}}

        <div class="carousel-inner">

            <div class="carousel-item active c-item">
                <img src="{{ asset('image/Crownpuccino.png') }}" class="d-block w-100 c-img" alt="banner utama">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 mb-2" alt="Title for banner">Three Toruz</h1>
                    <p class="mb-5" alt="Banner's description">Donat Ubi Surabaya.</p>
                </div>
            </div>

            @foreach ($banners as $bannerHome)
                <div class="carousel-item c-item">
                    @if ($bannerHome->banner_pict)
                        <img src="{{ asset('storage/' . $bannerHome->banner_pict) }}" class="d-block w-100 c-img"
                            alt="{{ $bannerHome->banner_judul }}">
                    @else
                        <img src="{{ asset('image/unavailablepict.png') }}" alt="No Image" class="d-block w-100 c-img">
                    @endif
                </div>
            @endforeach

            {{-- <div class="carousel-item c-item">
                <img src="{{ asset('image/padangGurun.jpg') }}" class="d-block w-100 c-img" alt="banner lainnya">
            </div> --}}
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END OF JUMBOTRON AKA BANNER -->

    <!-- START OF BESTSELLER PRODUCTS -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mx-auto" style="max-width: 700px;">
                <h1 class="display-6">Highlight Products</h1>
                <p>Indulge in the irresistible charm of our top-rated donuts, redefining excellence with every delectable
                    bite.</p>
            </div>
            {{-- start of cards --}}
            <div class="container mb-5  ">
                <div class="row align-items-center justify-content-center">
                    @foreach ($highlights as $highlight)
                    <div class="col-md-3 m-5 ">
                        <div class="card shadow p-4" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ asset('storage/' . $highlight->foto_produk) }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $highlight->nama_produk }}</h5>
                                <p class="card-text">
                                    {{ $highlight->deskripsi_produk }}
                                </p>
                                <a href="{{ route('productDetail', ['id' => $highlight->id]) }}" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
                {{-- end of cards --}}
                <div class="center-btn mt-4">
                    <a href="product" class="btn btn-primary rounded-pill py-3 px-2">View All</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF BESTSELLER PRODUCTS -->

    <!-- START OF PROMO SECTION -->
    <div class="container-fluid banner bg-secondary ">
        <div class="container py-5">
            
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-4">Limited-Offer</h1>
                        <p class="fw-normal display-6 text-white mb-4">In Our Store</p>
                        <p class="mb-4 text-white">Enjoy a special discount of our delicious donuts. Hurry in and take advantage of this opportunity to savor the delightful taste at a more affordable price!</p>
                        <a href="promo" class="banner-btn btn border-2 border-white rounded-pill py-3 px-5">SEE ALL</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('image/Candy Kingdom.png') }}" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center rounded-circle position-absolute"
                            style="width: 200px; height: 200px; top: 0; left: 0; background: #F5DCC6;">
                            <h1 style="font-size: 75px;">%</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END OF PROMO SECTION -->

    {{-- START OF LOCATION AND OPERATIONAL HOURS --}}
    <div class="container-fluid py-5">
        <div class="text-center mx-auto" style="max-width: 700px;">
            <h1 class="display-6">Our Location</h1>
        </div>
        <div class="container">
            <div class="bg-location p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        @foreach($locTimes as $locTime)
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-map-pin  text-secondary"></i>
                            <h1>{{ $locTime->loc }}</h1>
                            <h4>{{ $locTime->time }}</h4>
                            <p>{{ $locTime->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF LOCATION AND OPERATIONAL HOURS --}}
@endsection
