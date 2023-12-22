@extends('layouts.template')

@section('layout_content')
    <!-- bootstrap untuk icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- bootstrap penutup icon -->

    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/home.css">
    <!-- akhir panggil css file di dalam laravel -->


    <!-- <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="{{ asset('image/kebunku.jpg') }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption mt-5 d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="{{ asset('image/padangGurun.jpg') }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/kebunku.jpg') }}"  class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/padangGurun.jpg') }}"  class="d-block w-100" alt="...">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
