@extends('layouts.admin.index')
@section('content')
@section('menu','Detail Postingan')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{$mat->judul}}</h4>
                <div class="card-header-action">
                    <a href="/editmateri/{{$mat->id}}"class="btn btn-warning">Edit</a>
                    <a href="/deletemateri/{{$mat->id}}" class="btn btn-danger">Hapus</a>
                    <a href="{{route('listmateri')}}" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success" role = 'alert'>{{session('success')}}</div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td style="vertical-align: top"></td>
                                <td style="vertical-align: top" class="py-2 px-3"></td>
                                <td>{{$mat->konten}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
