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
            <form method="POST" action="{{ route('promo_update', $promoEdit) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="image" class="form-label">Update Promo Image</label>
                    <input class="form-control" type="file" name="image" id="image"
                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()"
                        value="{{ $promoEdit->image }}" required>
                    <img class="img-preview img-fluid mb-3 col-sm-5" id="img-preview"
                        src="{{ asset('storage/' . $promoEdit->image) }}" alt="">
                    <!-- Menampilkan gambar yang sudah ada -->
                </div>
                <div class="form-group">
                    <label label for="name" class="form-label">Promo Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $promoEdit->name }}">
                </div>
                <div class="form-group">
                    <label label for="price" class="form-label">Promo Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $promoEdit->price }}">
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai" class="form-label">Start</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" 
                        value="{{ $promoEdit->tanggal_mulai }}">
                </div>
                <div class="form-group">
                    <label for="tanggal_berakhir" class="form-label">End</label>
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" 
                        value="{{ $promoEdit->tanggal_berakhir }}">
                </div>
                <div class="form-group">
                    <label label for="description" class="form-label">Promo Description</label>
                    <textarea class="form-control" name="description">{{ $promoEdit->description }}</textarea>
                </div>

                <input type="button" class="btn btn-default" onclick="window.location='{{ route('promo_view') }}'"
                    value="Cancel">
                <button type="submit" class="btn btn-success" value="Save">Save</button>
            </form>
        </div>
    </div>

    <!-- JavaScript untuk fungsi previewImage -->
    <!-- JavaScript untuk fungsi previewImage -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set initial image preview
            previewImage();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();

            // Check if there's a file selected
            if (image.files.length > 0) {
                ofReader.readAsDataURL(image.files[0]);

                ofReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
            // If no file selected, keep the existing image preview
        }
    </script>
@endsection
