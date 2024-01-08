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
            <form method="POST" action="{{ route('banner_update', $bannerEdit) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="banner_pict" class="form-label">Update Home Banner Image</label>
                    <input class="form-control" type="file" name="banner_pict" id="banner_pict"
                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()" required>
                    <img class="img-preview img-fluid mb-3 col-sm-5"
                        src="{{ asset('storage/' . $bannerEdit->banner_pict) }}" alt="">
                    <!-- Menampilkan gambar yang sudah ada -->
                </div>
                <div class="form-group">
                    <label label for="banner_judul" class="form-label">Banner Title</label>
                    <input type="text" class="form-control" name="banner_judul" value="{{ $bannerEdit->banner_judul }}">
                </div>
                <div class="form-group">
                    <label label for="banner_deskripsi" class="form-label">Banner Description</label>
                    <textarea class="form-control" name="banner_deskripsi">{{ $bannerEdit->banner_deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="starting_time" class="form-label">Start</label>
                    <input type="date" class="form-control" id="starting_time" name="starting_time" required
                        value="{{ $bannerEdit->starting_time }}">
                </div>
                <div class="form-group">
                    <label for="Ending_time" class="form-label">End</label>
                    <input type="date" class="form-control" id="Ending_time" name="Ending_time" required
                        value="{{ $bannerEdit->Ending_time }}">
                </div>
                <input type="button" class="btn btn-default" onclick="window.location='{{ route('banner_view') }}'" value="Cancel">
                <button type="submit" class="btn btn-success" value="Save">Save</button>
            </form>
        </div>
    </div>

    <!-- JavaScript untuk fungsi previewImage -->
    <script>
        function previewImage() {
            const image = document.querySelector('#banner_pict');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
