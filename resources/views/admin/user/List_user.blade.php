@extends('admin.layouts.layout_admin')
@section('ADmincontent')
<div id="content-wrapper">

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách người dùng
            </div>
            <div class="card-body">
                @if(session('success'))
                <h5 class="alert alert-warning">{{ session('success') }}</h5>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ListUser as $users)
                           <tr>
                                <td>{{ $users -> name }}</td>
                                <td><img src="{{asset('images')}}/{{ $users -> images }}" alt="" width="50px" height="50px"></td>
                                <td>{{ $users -> phone }}</td>
                                <td>{{ $users -> address }}</td>
                                <td>{{ $users -> email }}</td>
                                <td>{{ $users -> username }}</td>
                                <td style="max-width: 15px;">{{ $users -> password }}</td>
                                <td>
                                    @if ($users->role == 1)
                                    <span style="color: #ee3b3b;"><strong>Admin</strong></span>
                                    @else
                                    <span style="color: #3b5998;"><strong>User</strong></span>
                                    @endif
                                </td>
                                <td>
                                    @if ($users->status == 1)
                                    <span style="color: #85ef9e;"><strong>Hoạt động</strong></span>
                                    @else
                                    <span style="color: #3b3b3b50;"><strong>Tạm đóng</strong></span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/dashboard/deleteuser/{{ $users -> id }}" class="btn btn-dark">Xóa</a>
                                </td>       
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {!! $ListUser->links() !!}
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
