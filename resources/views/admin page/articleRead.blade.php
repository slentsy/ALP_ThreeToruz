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

    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
    <div class="col-lg-12" style="padding: 100px;">

        {{-- BANNER HOME PAGE FORM --}}
        <div class="tab-pane active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Articles</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#createArticle" class="btn btn-success" data-toggle="modal"><i
                                            class="material-icons">&#xE147;</i> <span>Add New Article</span></a>
                                    <a href="#deleteProduct" class="btn btn-danger" data-toggle="modal"><i
                                            class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label>
                                            </span>
                                        </td>
                                        <td><img class="img-fluid w-25"
                                                src="{{ asset('storage/' . $article->gambar) }}" /></td>
                                        <td class="w-25">{{ $article->judul_article }}</td>
                                        <td class="w-25">{{ $article->deskripsi_article }}</td>
                                        

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('article_edit', $article) }}" class="edit">
                                                    <i class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i>
                                                </a>
                                                <form action="{{ route('article_destroy', $article) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="delete" data-toggle="modal" id="delete"
                                                        name="delete">
                                                        <i class="material-icons" data-toggle="tooltip"
                                                            title="Delete">&#xE872;</i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Modal HTML -->
            <div id="createArticle" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('article_store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title">Add New article</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="gambar" class="form-label">Upload Article Picture</label>
                                    <input class="form-control" type="file" name="gambar" id="gambar"
                                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()" required>
                                    <img class="img-preview img-fluid mb-3 col-sm-5" src="" alt="">
                                </div>
                                <div class="form-group">
                                    <label label for="judul_article" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="judul_article" required>
                                </div>
                                <div class="form-group">
                                    <label label for="deskripsi_article" class="form-label">Content</label>
                                    <textarea class="form-control" name="deskripsi_article" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Update Modal HTML -->
            {{-- <div id="editHomeBanner" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('banner.update', $banner) }}">
                                @method('put')
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Employee</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label label for="banner_judul" class="form-label">Banner Title</label>
                                        <input type="text" class="form-control" name="banner_judul"
                                            value="{{ $bannerEdit->banner_judul }}">
                                    </div>
                                    <div class="form-group">
                                        <label label for="banner_deskripsi" class="form-label">Banner Description</label>
                                        <textarea class="form-control" name="banner_deskripsi">{{ $bannerEdit->banner_deskripsi }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-info" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}

            <!-- Delete Modal HTML -->
            {{-- <div id="deleteHomeBannernotyet" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{route('banner.destroy', $banner)}}" method="POST">
                                @csrf
                                @method('delete')
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Home Banner</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <button class="btn btn-danger" id="delete" name="delete">Delete</button>
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>


    {{-- javascript for input image preview --}}
    <script>
        function previewImage() {
            const image = document.querySelector('#gambar');
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
