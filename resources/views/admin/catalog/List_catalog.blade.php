@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách loại danh mục <h4>CHEEMS STORE</h4>
                <a href="/admin/dashboard/createCatalog" class="btn btn-dark">Thêm danh mục mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>idCatalog</th>
                                <th>idParentCatalog</th>
                                <th>nameCatalog</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>idCatalog</th>
                                <th>idParentCatalog</th>
                                <th>nameCatalog</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody> 
                            @foreach ($ListCatalog as $ListCatalogs)
                            <tr>
                                <td>{{ $ListCatalogs -> idCatalog }}</td>
                                <td>{{ $ListCatalogs -> idParentCatalog }}</td>
                                <td>{{ $ListCatalogs -> nameCatalog }}</td>
                                <td>
                                <a href="/admin/dashboard/editCatalog/{{$ListCatalogs->idCatalog}}" class="btn btn-dark">Sửa</a><br><br>
                                <a href="/admin/dashboard/deleteCatalog/{{$ListCatalogs->idCatalog}}" class="btn btn-dark">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $ListCatalog->links() !!}
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
