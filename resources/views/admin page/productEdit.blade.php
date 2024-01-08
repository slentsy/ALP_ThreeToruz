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
            <form method="POST" action="{{ route('product_update', $productEdit) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="foto_produk" class="form-label">Update Product Image</label>
                    <input class="form-control" type="file" name="foto_produk" id="foto_produk"
                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()" value="{{$productEdit->foto_produk}}" required>
                    <img class="img-preview img-fluid mb-3 col-sm-5" id="img-preview"
                        src="{{ asset('storage/' . $productEdit->foto_produk) }}" alt="">
                    <!-- Menampilkan gambar yang sudah ada -->
                </div>
                <div class="form-group">
                    <label label for="nama_produk" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="nama_produk" value="{{ $productEdit->nama_produk }}">
                </div>
                <div class="form-group">
                    <label label for="harga_produk" class="form-label">Product Price</label>
                    <input type="number" class="form-control" name="harga_produk" value="{{ $productEdit->harga_produk }}">
                </div>
                <div class="form-group">
                    <label label for="deskripsi_produk" class="form-label">Product Description</label>
                    <textarea class="form-control" name="deskripsi_produk">{{ $productEdit->deskripsi_produk }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category_id" class = "form-label">Product Category</label>
                    <select name="category_id" id="category_id">
                        @foreach ($categoryEdit as $category)
                            <option value = "{{ $category->id }}"{{ $category->id == $productEdit->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <input type="button" class="btn btn-default" onclick="window.location='{{ route('product_view') }}'"
                    value="Cancel">
                <button type="submit" class="btn btn-success" value="Save">Save</button>
            </form>
        </div>
    </div>

    <!-- JavaScript untuk fungsi previewImage -->
    <!-- JavaScript untuk fungsi previewImage -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Set initial image preview
        previewImage();
    });

    function previewImage() {
        const image = document.querySelector('#foto_produk');
        const imgPreview = document.querySelector('#img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();

        // Check if there's a file selected
        if (image.files.length > 0) {
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        // If no file selected, keep the existing image preview
    }
</script>
@endsection
