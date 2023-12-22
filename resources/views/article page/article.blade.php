@extends('layouts.template')

@section('layout_content')
    <div class="content-article">
        @foreach ($articles as $key => $article)
            <div class="row row-content">
                <!-- Left Column -->
                <div class="col-md-6 right-column kolom-gambar">
                    <img src="{{asset('image/Infinite Horizon.png')}}" alt="Gambar Artikel" class="gambar-artikel">
                </div>

                <!-- Right Column -->
                <div class="col-md-6 left-column kolom-tulisan">
                    <h2 class="text">{{ $article->judul_article}}</h2>
                    <p class="text">{{ $article->deskripsi_article}}</p>
                    <a href="/article/create">Add Article</a>
                </div>
                
            </div>
        @endforeach
    </div>
@endsection
