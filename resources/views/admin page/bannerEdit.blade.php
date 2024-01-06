@extends('layouts.template')
@section('layout_content')
<!-- Update Modal HTML -->
<div id="editHomeBanner" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('banner.update', $bannerEdit) }}">
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
                        <input type="text" class="form-control" name="banner_judul" value="{{$bannerEdit->banner_judul}}">
                    </div>
                    <div class="form-group">
                        <label label for="banner_deskripsi" class="form-label">Banner Description</label>
                        <textarea class="form-control" name="banner_deskripsi">{{$bannerEdit->banner_deskripsi}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection