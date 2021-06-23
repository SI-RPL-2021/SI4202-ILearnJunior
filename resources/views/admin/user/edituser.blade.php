@extends('layouts.admin.index')
@section('content')
@section('menu', "Edit Postingan User")
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Update Data User</h4>
                <div class="card-header-action">
                    <a href="{{route('listuser')}}" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('updateuser',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="emails" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Perbarui User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection