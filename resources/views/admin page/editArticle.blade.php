@extends('layouts.template')

@section('layout_content')
    @php
        $pagetitle = "New Article";
    @endphp
    <div class="container mt-4 new-article">
        <form action="{{route('article.update', $article->id)}}" method="POST" enctype="multipart/form-data">
            <h1>Edit Article Article</h1>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul_article">Judul Article:</label>
                <input type="text" class="form-control" id="judul_article" name="judul_article" placeholder="Nama" value="{{ $article->judul_article }}">
            </div>
            <div class="form-group">
                <label for="deskripsi_article">Deskripsi Article:</label>
                <textarea class="form-control" id="deskripsi_article" name="deskripsi_article" rows="4" placeholder="Tuliskan deskripsi article">{{ $article->deskripsi_article }}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_publish">Tanggal Publish:</label>
                <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" placeholder="Tanggal" value="{{ $article->tanggal_publish }}">
            </div>
            <div class="form-group">
                <label for="gambar">Pilih Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
