@extends('layouts.template')

@section('layout_content')
    <!-- bootstrap untuk icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- bootstrap penutup icon -->

    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- akhir panggil css file di dalam laravel -->
    
    <div class="background-aboutUs">
        <!-- Hero Start -->
        <section class="jumbotron">
            <div class="container text-center">
                    <h1 class="display-4">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                                <li class="breadcrumb-item"><a class="text-white" href="https://www.instagram.com/threetoruz/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">Instagram</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="">Email</a></li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </section>
        <!-- Hero End -->


        <!-- Feature Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature-item position-relative bg-primary text-center p-3">
                            <div class="py-5 px-3">
                                <i class="bi bi-balloon-heart-fill text-danger" style="font-size: 2rem;"></i>
                                <h5 class="text-white mb-0">Premium Topping</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="feature-item position-relative bg-primary text-center p-3">
                            <div class="py-5 px-3">
                                <i class="bi bi-ban-fill text-danger" style="font-size: 2rem;"></i>
                                <h5 class="text-white mb-0">No preservatives</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="feature-item position-relative bg-primary text-center p-3">
                            <div class="py-5 px-3">
                                <i class="bi bi-house-check-fill text-danger" style="font-size: 2rem;"></i>
                                <h5 class="text-white mb-0">No emulsifier</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid animated pulse infinite" src="{{asset('image/Giga Lotus.png')}}">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="text-primary mb-4 caption-aboutUs">Three Toruz<span class="fw-light text-dark"> Is Donat Ubi
                                Surabaya</span></h1>
                        <p class="mb-4 caption-aboutUs">Donat Three Toruz terbuat dari SWEET POTATOES tanpa bahan pengawet dan tanpa tambahan emulsifier.
                            Jadi Toruzers jangan bingung kalau donat kami isinya bewarna kuning, karena terbuat dari SWEET POTATOES dan 
                            tentunya lebih soft daripada donat yang terbuat dari bahan lainnya. Gimana Toruzers jadi pengen beli lagi gak sihhhh?😋🤩
                        </p>
                        <p class="mb-4 caption-aboutUs">Nah buat Toruzers yang belom coba, mending buruan beli dehh biar gak FOMO🤤</p>
                        <a class="btn btn-primary py-2 px-4" href="/product">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
    </div>
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
@endsection