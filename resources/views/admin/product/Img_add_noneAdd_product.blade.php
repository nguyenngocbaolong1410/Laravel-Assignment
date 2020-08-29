@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Thêm Hình ảnh
            </div>
            <div class="card-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> có cái gì đó sai sai.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('thieuhinh'))
                <h5 class="alert alert-warning">{{ session('thieuhinh') }}</h5>
                @endif
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label>Hình ảnh <span style="color: #aaa;">(Hình 150x150 pixel)</span></label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <label>Upload hình<span style="color: #aaa;"></span></label>
                        <button type="submit" class="btn btn-success btn-block btn-danger">Upload</button>
                    </div>
                    <div class="col-sm-4" style="float: left;">
                        <label>Quên hình này <span style="color: #aaa;">( Hình ảnh vẫn sẽ lưu trong thư mục <strong>images</strong> )</span></label>
                        <a href="/admin/dashboard/ForgerImages" class="btn btn-success btn-block btn-danger">Quên hình ảnh</a>
                    </div>
                </div>
                </form>
            </div>
            <div class="card-footer">
                @if($message = Session::get('ImagesUpload'))
                <h5 class="alert alert-black">Đây là hình ảnh hồi trước của bạn : <strong>{{ $message }}</strong></h5>
                <img src="{{asset('images')}}/{{ $message }}" alt="" width="250px" height="auto">
                <span style="color: #aaa; border: 1px solid #aaa;border-radius:10px; padding: 10px;"><strong>Width : 250px | {{ $message }}</strong></span>
                @endif
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
