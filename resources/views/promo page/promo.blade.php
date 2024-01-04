@extends('layouts.template')
@section('layout_content')
    <div class="container content-promo">
        <h2 class="promo-title">Our Promo Product</h2>
        <form action="/promo" method="GET" class="form-inline w-25 d-flex gap-2 form-search">
            <input type="form-control" type="search" name="search" placeholder="Search">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>
        <button type="button" class="btn btn-secondary">Add Promo</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Promo</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promos as $key => $promo)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $promo->nama_promo }}</td>
                    <td>{{ $promo->deskripsi_promo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div>
            {{ $promos ->links()}}
        </div>
    </div>
    <img src="{{asset('image/Price List.png')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto gambar-promo" width="500" height="500">
@endsection
