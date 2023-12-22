@extends('layouts.template')
@section('layout_content')
    <div class="container div-promo">
        @foreach ($promos as $key => $promo)
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">{{ $promo->nama_promo }}<span class="text-muted"></span></h2>
                    <p class="lead">Only Rp{{ $promo->deskripsi_promo }} you will get the best donut🤤</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>
            <hr class="featurette-divider">
        @endforeach
    </div>
    </div>
@endsection
