@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Thêm sản phẩm
            </div>
            <form method="post" action="{{ url('/admin/dashboard/store') }}" enctype="multipart/form-data" >
            {{ csrf_field() }}
                <div class="card-body">
                    <div class="container-fluid">
                    @if(session('success'))
                    <h5 class="alert alert-warning">{{ session('success') }}</h5>
                    @endif
                    @if ($message = Session::get('ImagesUpload'))

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="nameProduct" class="form-control" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Giá Tiền</label>
                                    <input type="number" name="priceProduct" class="form-control" placeholder="Giá Tiền [VNĐ]">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" name="noidungProduct" class="form-control" placeholder="Mô tả sản phẩm">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Id Danh mục con</label>
                                    <input type="number" name="idCatalogProduct" class="form-control" placeholder="ID Danh mục con">
                                    <div class="form-group">
                                    <label>Thông tin thêm</label>
                                    <input type="text" name="infoProduct" class="form-control" placeholder="Thông tin thêm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tên hình</label>
                                    <input type="text" name="imgProduct" class="form-control" value="{{ Session('ImagesUpload') }}" readonly>
                                    <img class="img-thumbnail" src="{{asset('images')}}/{{ Session('ImagesUpload') }}" alt="" width="150px" height="auto">
                                    <span style="color: #333; border: 1px solid #ddd;border-radius:10px; padding: 10px;"><strong>{{ Session('ImagesUpload') }}</strong></span>
                                </div>
                            </div>
                        </div>
                    @else
                    <center>
                    <div class="col-sm-6">
                    <h6 class="alert alert-dark">Hãy thêm hình ảnh trước khi thêm sản phẩm mới.<h6>
                    <a href="/admin/dashboard/Images" class="btn btn-dark"> <strong>Tiến tới UPLoad Images</strong> </a>
                    </div>
                    </center>
                    @endif
                    </div>
                </div>
                <div class="card-footer small text-muted"><button type="submit" class="btn btn-block btn-danger">Create</button></div>
                    @if(count($errors->all())>0)
                        <div class="card-footer">
                            <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
            </form>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách sản phẩm <h4>CHEEMS STORE</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th width="10%">idCatalogProduct</th>
                                <th width="20%">nameProduct</th>
                                <th width="10%">imgProduct</th>
                                <th width="10%">priceProduct</th>
                                <th width="20%">noidungProduct</th>
                                <th width="20%">infoProduct</th>
                                <th width="10%">buyedProduct</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <tr>
                                @foreach ($ListProduct as $LProduct)
                                <tr>
                                <td>{{ $LProduct -> idCatalogProduct  }}</td>
                                <td>{{ $LProduct -> nameProduct }}</td>
                                <td><span class="card">{{ $LProduct -> imgProduct }}</span> <img class="img-thumbnail" src="{{asset('images')}}/{{ $LProduct -> imgProduct }}" alt="Width: 150px" width="150px" height="auto"></td>
                                <td>{{ $LProduct -> priceProduct }}</td>
                                <td>{{ $LProduct -> noidungProduct }}</td>
                                <td>{{ $LProduct -> infoProduct }}</td>
                                <td>{{ $LProduct -> buyedProduct }}</td>
                                <td><a href="/admin/dashboard/edit/{{$LProduct->idProduct}}" class="btn btn-dark">Sửa</a><br><br>
                                    <a href="/admin/dashboard/delete/{{$LProduct->idProduct}}" class="btn btn-dark">Xóa</a></td>
                                </tr>
                                @endforeach
                            </tr>
                        </tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>idCatalogProduct</th>
                                <th>nameProduct</th>
                                <th>imgProduct</th>
                                <th>priceProduct</th>
                                <th>noidungProduct</th>
                                <th>infoProduct</th>
                                <th>buyedProduct</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                {!! $ListProduct->links() !!}
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
