@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Sửa sản phẩm
            </div>
            <div class="card-body">
                <form method="post"  action="/admin/dashboard/update/{{$Editproduct->idProduct}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="container-fluid">
                    @if(session('success'))
                    <h5 class="alert alert-warning">{{ session('success') }}</h5>
                    @endif
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tên sản phẩm <span style="color: #aaa;">- {{$Editproduct->nameProduct}}</span></label>
                                    <input type="text" name="nameProduct" class="form-control" placeholder="Tên sản phẩm" value="{{$Editproduct->nameProduct}}">
                                </div>
                                <div class="form-group">
                                    <label>Giá Tiền <span style="color: #aaa;">- {{$Editproduct->priceProduct}}</span></label>
                                    <input type="number" name="priceProduct" class="form-control" placeholder="Giá Tiền [VNĐ]" value="{{$Editproduct->priceProduct}}">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả <span style="color: #aaa;">- {{$Editproduct->noidungProduct}}</span></label>
                                    <input type="text" name="noidungProduct" class="form-control" placeholder="Mô tả sản phẩm" value="{{$Editproduct->noidungProduct}}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Id Danh mục con <span style="color: #aaa;">- {{$Editproduct->idCatalogProduct}}</span></label>
                                    <input type="number" name="idCatalogProduct" class="form-control" placeholder="ID Danh mục con" value="{{$Editproduct->idCatalogProduct}}">
                                    <div class="form-group">
                                    <label>Thông tin thêm <span style="color: #aaa;">- {{$Editproduct->infoProduct}}</span></label>
                                    <input type="text" name="infoProduct" class="form-control" placeholder="Thông tin thêm" value="{{$Editproduct->infoProduct}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tên hình <span style="color: #aaa;">- {{$Editproduct->imgProduct}}</span></label>
                                    <input type="text" name="imgProduct" class="form-control" placeholder="Hình sản phẩm" value="{{$Editproduct->imgProduct}}">
                                    <img class="img-thumbnail" src="{{asset('images')}}/{{$Editproduct->imgProduct}}" alt="" width="150px" height="auto">
                                    <span style="color: #333; border: 1px solid #ddd;border-radius:10px; padding: 10px;"><strong>{{$Editproduct->imgProduct}}</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer small text-muted"><button type="submit" class="btn btn-block btn-danger">Edit Sản phẩm</button></div>
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
