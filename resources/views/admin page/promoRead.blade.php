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

        {{-- PROMO PAGE FORM --}}
        <div class="tab-pane active" id="nav-promo" role="tabpanel" aria-labelledby="nav-promo-tab">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Promos</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#createPromo" class="btn btn-success" data-toggle="modal"><i
                                            class="material-icons">&#xE147;</i> <span>Add New Promo</span></a>
                                    <a href="#deletePromo" class="btn btn-danger" data-toggle="modal"><i
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
                                    <th>Price</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($promos as $promo)
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label>
                                            </span>
                                        </td>
                                        <td><img class="img-fluid w-25" src="{{ asset('storage/' . $promo->image) }}" />
                                        </td>
                                        <td class="w-25">{{ $promo->name }}</td>
                                        <td class="w-25">{{ $promo->price }}k</td>
                                        <td class="w-25">{{ $promo->tanggal_mulai }}</td>
                                        <td class="w-25">{{ $promo->tanggal_berakhir }}</td>
                                        <td class="w-25">{{ $promo->description }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('promo_edit', $promo) }}" class="edit">
                                                    <i class="material-icons" data-toggle="tooltip"
                                                        title="Edit">&#xE254;</i>
                                                </a>
                                                <form action="{{ route('promo_destroy', $promo) }}" method="POST">
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
            <div id="createPromo" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('promo_store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Promo</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="image" class="form-label">Upload Promo Image</label>
                                    <input class="form-control" type="file" name="image" id="image"
                                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()" required>
                                    <img class="img-preview img-fluid mb-3 col-sm-5" src="" alt="">
                                </div>
                                <div class="form-group">
                                    <label label for="name" class="form-label">Promo Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label label for="price" class="form-label">Promo Price (satuan k)</label>
                                    <input type="number" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_mulai" class="form-label">Start</label>
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_berakhir" class="form-label">End</label>
                                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir">
                                </div>
                                <div class="form-group">
                                    <label label for="description" class="form-label">Promo Description</label>
                                    <textarea class="form-control" name="description"></textarea>
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
            const image = document.querySelector('#image');
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
