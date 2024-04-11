@extends('base.backend.master')
@section('Manage-user.customer')
active
@endsection
@section('title')
All Customer
@endsection
@section('page-name')
All Customer
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active" aria-current="page">All Customer
</li>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="row">
    <div class="col-12 col-6">
    <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example"
                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100 text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>User Type</th>
                                <th>Can Login</th>
                                <th>Wallet Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adminUsers as $row)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->mobile }}</td>
                                <td>
                                    @if ($row->user_type == 2)
                                    <div class="px-25 py-10 w-100">
                                        <span class="badge badge-info">Customer</span>
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->can_login == 0)
                                    <div class="px-25 py-10 w-100">
                                        <span class="badge badge-warning">No</span>
                                    </div>
                                    @elseif ($row->can_login == 1)
                                    <div class="px-25 py-10 w-100">
                                        <span class="badge badge-success">Yes</span>
                                    </div>
                                    @elseif ($row->can_login == 2)
                                    <div class="px-25 py-10 w-100">
                                        <span class="badge badge-primary">Banned</span>
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    {{ $row->wallet ?? 0}}
                                </td>
                                <td>
                                    <a href="{{ url('customer/edit/' . $row->id) }}">
                                        <button type="button"
                                            class="waves-effect waves-light btn btn-warning btn-flat mb-5"><i
                                                class="ti-pencil"></i> Edit</button>
                                    </a>
                                    <a href="{{ url('customer/credit/' . $row->id) }}">
                                        <button type="button"
                                            class="waves-effect waves-light btn btn-warning btn-flat mb-5"><i
                                                class="ti-reload"></i> Update Credit</button>
                                    </a>
                                    @if ($row->can_login == 1)
                                    <a href="{{ url('customer/disable/' . $row->id) }}">
                                        <button type="button"
                                            class="waves-effect waves-light btn btn-primary btn-flat mb-5"><i
                                                class="ti-power-off"></i> Disable</button>
                                    </a>
                                    @elseif($row->can_login == 0)
                                    <a href="{{ url('customer/enable/' . $row->id) }}">
                                        <button type="button"
                                            class="waves-effect waves-light btn btn-warning btn-flat mb-5"><i
                                                class="ti-power-off"></i> Enable</button>
                                    </a>
                                    @endif
                                    <a href="{{ url('customer/delete/' . $row->id) }}">
                                        <button type="button"
                                            class="waves-effect waves-light btn btn-primary btn-flat mb-5"
                                            onclick="return confirm('Are you sure to delete this {{ $row->name }} user ?')"><i
                                                class="ti-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>User Type</th>
                                <th>Can Login</th>
                                <th>Wallet Balance</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection