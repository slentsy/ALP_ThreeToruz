@extends('layouts.template')
@section('layout_content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/admin.css">
    <!-- akhir panggil css file di dalam laravel -->
    <!-- Update Modal HTML -->

    <div>
        <div class="container" style="padding: 100px;">
            <form method="POST" action="{{ route('category_update', $categoryEdit) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="category_name" value="{{ $categoryEdit->category_name }}">
                </div>
                <input type="button" class="btn btn-default" onclick="window.location='{{ route('category_view') }}'" value="Cancel">
                <button type="submit" class="btn btn-success" value="Save">Save</button>
            </form>
        </div>
    </div>
@endsection
