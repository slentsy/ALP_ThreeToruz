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
                @if($bannerHome->banner_pict)
                <img src="{{ asset('storage/' .$bannerHome->banner_pict) }}" class="d-block w-100 c-img" alt="{{ $bannerHome->banner_judul }}">
                @else
                <img src="{{ asset('image/unavailablepict.png') }}" alt="No Image" class="d-block w-100 c-img">
                @endif
            </div>
            @endforeach

            {{-- <div class="carousel-item c-item">
                <img src="{{ asset('image/padangGurun.jpg') }}" class="d-block w-100 c-img" alt="banner lainnya">
            </div> --}}
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END OF JUMBOTRON AKA BANNER -->

    <!-- START OF BESTSELLER PRODUCTS -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mx-auto" style="max-width: 700px;">
                <h1 class="display-6">Bestseller Products</h1>
                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                    reasonable.</p>
            </div>
            {{-- start of cards --}}
            <div class="container mb-5  ">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-3 m-5 ">
                        <div class="card shadow p-4" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ asset('image/Berry Delight.png') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Berry Delight</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime possimus saepe sunt non
                                    in illo
                                    dolore omnis perspiciatis doloribus dicta nostrum, harum quasi vero a distinctio
                                    voluptatum
                                    porro numquam. Nulla.
                                </p>
                                <a href="#" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 m-5">
                        <div class="card shadow p-4" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ asset('image/Red Knight.png') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Red Knight</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime possimus saepe sunt non
                                    in illo
                                    dolore omnis perspiciatis doloribus dicta nostrum, harum quasi vero a distinctio
                                    voluptatum
                                    porro numquam. Nulla.
                                </p>
                                <a href="#" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 m-5">
                        <div class="card shadow p-4" style="width: 20rem;">
                            <div class="inner">
                                <img src="{{ asset('image/Choco Coffin.png') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body text-center">
                                <h5 class="card-title">Choco Coffin</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime possimus saepe sunt non
                                    in illo
                                    dolore omnis perspiciatis doloribus dicta nostrum, harum quasi vero a distinctio
                                    voluptatum
                                    porro numquam. Nulla.
                                </p>
                                <a href="#" class="btn btn-primary">See Detail</a>
                            </div>
                        </div>
                    </div>
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
                        <p class="fw-normal display-6 text-white mb-4">Nama Promo: Sugar Baby Toruz</p>
                        <p class="mb-4 text-white">Deskripsi Promo: The generated Lorem Ipsum is therefore always free from
                            repetition
                            injected humour, or non-characteristic words etc.</p>
                        <a href="promo" class="banner-btn btn border-2 border-white rounded-pill py-3 px-5">SEE ALL</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="image/Candy Kingdom.png" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center rounded-circle position-absolute"
                            style="width: 200px; height: 200px; top: 0; left: 0; background: #F5DCC6;">
                            <h1 style="font-size: 75px;">70k</h1>
                            <div class="d-flex flex-column">
                                <span class="h5 text-muted mb-0">per</span>
                                <span class="h4 text-muted mb-0">BOX</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END OF PROMO SECTION -->
@endsection
