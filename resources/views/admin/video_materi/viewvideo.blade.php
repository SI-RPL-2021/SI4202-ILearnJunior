@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Postingan Video</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>List Postingan Video</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover" ">
                                <th>No</th>
                                <th>Nama Video</th>
                                <th>Description Video</th>
                                <th>Link Video</th>
                                <th>Action</th>
                                <tbody>
                                    <?php $index = 1; ?>
                                     @foreach ($listvid as $lv)
                            <td>{{ $index++ }}</td>
                            
                        <td>{{$lv -> judulvid}}</td>
                        <td>{{$lv -> descvideo}}</td>
                        <td>{{$lv -> linkvideo}}</td>
                        <td>
                        <a href=" /editvideo/{{$lv->id}}" class=" btn btn-sm btn-success">Edit</a>
                        <a href="/delete/{{$lv->id}}" class="btn btn-sm btn-success">Delete</a>
                        </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection