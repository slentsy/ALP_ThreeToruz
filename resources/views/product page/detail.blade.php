{{-- UNTUK DETAIL MASING MASING PRODUK --}}
@extends('layouts.template')
@section('layout_content')
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        
                        <div class="col-lg-6">
                            <a href="javascript:history.back()" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                                <i class="fa fa-arrow-left me-2 text-primary"></i> Back
                            </a>
                            <div class="border rounded">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $productDetail->foto_produk) }}" class="img-fluid rounded"
                                        alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            
                            <h4 class="fw-bold mb-3">{{ $productDetail->nama_produk }}</h4>
                            {{-- <p class="mb-3">{{ $productDetail->category_id }}</p> --}}
                            <h5 class="fw-bold mb-3">Rp{{ $productDetail->harga_produk }}</h5>

                            <p class="mb-4">{{ $productDetail->deskripsi_produk }}</p>


                            <a href="https://www.instagram.com/threetoruz/" target="_blank"
                                class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i> DM to Order
                            </a>

                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                        id="nav-article-tab" data-bs-toggle="tab" data-bs-target="#nav-article"
                                        aria-controls="nav-about" aria-selected="false">Articles</button>
                                    <button class="nav-link border-white border-bottom-0 active" type="button"
                                        role="tab" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review"
                                        aria-controls="nav-review" aria-selected="true">Reviews</button>
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane" id="nav-article" role="tabpanel" aria-labelledby="nav-article-tab">

                                </div>
                                <!--foreach untuk review dengan produk tertentu-->
                                <div class="tab-pane active" id="nav-review" role="tabpanel"
                                    aria-labelledby="nav-review-tab">
                                    @foreach ($reviews as $review)
                                        <div class="d-flex">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;">
                                                    {{ $review->created_at->setTimezone('Asia/Jakarta')->format('F j, Y') }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <h5>{{ $review->review_customerName }}</h5>
                                                </div>
                                                <p class="text-dark">{{ $review->review_description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('review_store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <h4 class="mb-5 fw-bold">Leave a Review</h4>

                            {{ csrf_field() }}
                            <div class="row g-4">
                                <input type="hidden" name="produk_id" value="{{ $productDetail->id }}">
                                <div class="col-lg-6">
                                    <div class="border-bottom rounded form-group">
                                        <label for="review_customerName" class="form-label">Name</label>
                                        <input type="text" class="form-control border-0 me-4" placeholder="Your Name *"
                                            name="review_customerName" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="border-bottom rounded form-group">
                                        <label for="review_email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control border-0" placeholder="Your Email *"
                                            name="review_email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-bottom rounded my-4 form-group">
                                        <label for="review_description" class="form-label">Review</label>
                                        <textarea class="form-control border-0" cols="5" rows="8" placeholder="Write Your Review *"
                                            name="review_description" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between py-3 mb-5">
                                        <input type="submit"
                                            class="btn border border-secondary text-primary rounded-pill px-4 py-3"
                                            value="Post Comment">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4">

                        {{-- SEARCHING AND CATEGORIES --}}
                        <div class="col-lg-12">
                            <div class="input-group w-100 mx-auto d-flex mb-4">
                                <input type="search" class="form-control p-3" placeholder="keywords"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="mb-4">
                                <h4>Categories</h4>
                                <ul class="list-unstyled">
                                    @foreach ($categories as $category)
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <a href="#"><i class="me-2"
                                                        style="color: black;"></i>{{ $category->category_name }}</a>
                                                {{-- <span>(3)</span> --}}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- FEATURED PRODUCTS (RELATED PRODUCTS) --}}
                        <div class="col-lg-12">
                            <h4 class="mb-4">Highlights products</h4>

                            @foreach ($highlights as $highlight)
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('storage/' . $highlight->foto_produk) }}"
                                            class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">{{ $highlight->nama_produk }}</h6>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rp{{ $highlight->harga_produk }}</h5>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <a href="product"
                                class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew
                                More</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="position-relative">
                            <img src="{{ asset('image/Berry Delight.png') }}" class="img-fluid w-100 rounded"
                                alt="">
                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                <h3 class="text-secondary fw-bold">Premium Toppings <br> No Preservatives <br> No
                                    Emulsifier</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
