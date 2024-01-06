@extends('layouts.template')

@section('layout_content')



@endsection
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
                    <!-- Tautan untuk menambah artikel -->
                    <div class="text-center mt-3">
                        <a href="/article/create" class="btn btn-primary">Add Article</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
