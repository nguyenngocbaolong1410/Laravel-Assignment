@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách sản phẩm <h4>CHEEMS STORE</h4>
                <a href="/admin/dashboard/create" class="btn btn-dark">Thêm sản phẩm mới</a>
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
