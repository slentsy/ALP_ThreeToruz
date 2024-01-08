@extends('layouts.template')

@section('layout_content')

<!-- Hero Start -->
<section class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Article</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="product">Article</a></li>
            </ol>
        </nav>
    </div>
    </div>
</section>
<!-- Hero End -->

<div class="content-article">
    @foreach ($articles as $article)
        <div class="row row-content">
            <!-- Left Column -->
            <div class="col-md-6 right-column kolom-gambar">
                {{-- @if ($article->gambar) --}}
                <img src="{{ asset('storage/' . $article->gambar) }}" alt="Gambar Artikel" class="gambar-artikel">
                {{-- @endif --}}
            </div>

            <!-- Right Column -->
            <div class="col-md-6 left-column kolom-tulisan">
                <h2 class="text">{{ $article->judul_article }}</h2>
                <p class="text">{{ $article->deskripsi_article }}</p>
                <!-- Tautan untuk menambah artikel -->
            </div>
        </div>
    @endforeach

    
</div>

@endsection