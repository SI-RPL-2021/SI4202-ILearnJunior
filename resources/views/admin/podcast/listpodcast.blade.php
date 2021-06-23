@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Daftar Podcast</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>List Podcast yang Terdaftar</h4>
                <div class="card-header-action">
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
                                <th>Judul Podcast</th>
                                <th>Deskripsi Podcast</th>
                                {{-- <th>Link Podcast</th> --}}
                                <th>Action</th>
                                <tbody>
                                    <?php $index = 1; ?>
                                    @foreach ($data as $podcast)
                            <td>{{ $index++ }}</td>
                            
                        <td>{{$podcast -> title}}</td>
                        <td>{{$podcast -> deskripsi}}</td>
                        {{-- <td>{{$podcast -> linkvideo}}</td> --}}
                        <td>
                        <a href=" /editpodcast/{{$podcast->id}}" class=" btn btn-sm btn-success">Edit</a>
                        <a href="/deletepodcast/{{$podcast->id}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection