@extends('layouts.template')

@section('layout_content')

    <div class="content-article">
        @foreach ($articles as $key => $article)
            <div class="row row-content">
                <!-- Left Column -->
                <div class="col-md-6 right-column kolom-gambar">
                    @if ($article->gambar)
                    <img src="{{asset('storage/photo-article/'.$article->gambar)}}" alt="Gambar Artikel" class="gambar-artikel">
                    @endif
                </div>

                <!-- Right Column -->
                <div class="col-md-6 left-column kolom-tulisan">
                    <h2 class="text">{{ $article->judul_article}}</h2>
                    <p class="text">{{ $article->deskripsi_article}}</p>
                    <!-- Tautan untuk menambah artikel -->
                </div>
            </div>
        @endforeach

        <!--ADD Article Button-->
        <div class="text-center mt-3">
            <a href="{{route('article.create')}}" class="btn btn-primary">Add Article</a>
        </div>
        <!-- END ADD Article Button -->

        <!--ADD Article Button-->
        <!-- <div class="text-center mt-3">
            <a href="{{route('article.create')}}" class="btn btn-danger">Delete Article</a>
        </div> -->
        <!-- END ADD Article Button -->
    </div>
@endsection
