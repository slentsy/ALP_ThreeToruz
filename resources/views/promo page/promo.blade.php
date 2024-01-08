@extends('layouts.template')
@section('layout_content')
    <!-- Hero Start -->
    <section class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Our Promos</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="product">Promo</a></li>
                </ol>
            </nav>
        </div>
        </div>
    </section>
    <!-- Hero End -->
    <div class="container div-promo">
        @foreach ($promos as $promo)
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">{{ $promo->name }}<span class="text-muted"></span></h2>
                    <p class="lead">Only Rp{{ $promo->price }}</p>
                    <p class="lead">{{ $promo->description }}</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        src="{{ asset('storage/' . $promo->image) }}" width="500" height="500" alt="Promo Image">
                </div>
            </div>
            <hr class="featurette-divider">
        @endforeach
    </div>
    </div>
@endsection
