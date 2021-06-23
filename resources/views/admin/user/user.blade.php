@extends('layouts.admin.index')
@section('content')
@section('menu', "Management User")
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>List User Terdaftar</h4>
            </div>
            @if (session('success'))    
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover">
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email User</th>
                            <th>Action</th>
                            <tbody>
                                <?php $index = 1; ?>
                                 @foreach ($data as $dt)
                        <td>{{ $index++ }}</td>

                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>
                            <a href="{{route('edituser',$dt->id)}}"class="btn btn-sm btn-success">Edit User</a>
                            <a href="{{route('deleteuser',$dt->id)}}"class="btn btn-sm btn-danger">Delete User</a>
                        </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection