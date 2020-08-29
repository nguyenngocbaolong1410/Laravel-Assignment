@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Quản lí đơn hàng</a>
            </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách đơn hàng</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Order</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Day Order</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id Order</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Day Order</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                @foreach ( $ListOrder as $LOrder )
                                <td>{{ $LOrder->id }}</td>
                                <td>{{ $LOrder->fullname }}</td>
                                <td>{{ $LOrder->address }}</td>       
                                <td>{{ $LOrder->phone }}</td>           
                                <td>{{ $LOrder->email }}</td>           
                                <td>{{ $LOrder->day_order }}</td>
                                <td>
                                    <a href="/admin/dashboard/deleteOrder/{{ $LOrder->id }}" class="btn btn-dark">Xóa</a>
                                </td>   
                                @endforeach        
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
