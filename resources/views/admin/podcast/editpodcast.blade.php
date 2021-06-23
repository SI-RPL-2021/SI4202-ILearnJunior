@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Edit Podcast</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Podcast</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary" href="{{route('podcast')}}">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success" role='alert '>
                    {{session('success')}}
                </div>
                @endif
                <form action="/updatepodcast/{{$data->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul Podcast</label>
                        <input value="{{$data->title}}" type="text" name="judulpodcast" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Podcast</label>
                        <textarea name="deskripsipodcast" class="form-control" id="floatingTextarea2" style="height: 100px">{{$data->deskripsi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Link Podcast</label>
                        <input value="{{$data->url_podcast}}" type="text" name="linkpodcast" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan Video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection