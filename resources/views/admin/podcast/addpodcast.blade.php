@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Tambahkan Podcast</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Podcast</h4>
            </div>
            @if(session('success'))
            <div class="alert alert-success" role='alert '>
                {{session('success')}}
            </div>
            @endif
            <div class="card-body">
                <form action="{{route('storepodcast')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul Podcast</label>
                        <input type="text" name="judulpodcast" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Podcast</label>
                        <textarea name="deskripsipodcast" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Link Podcast</label>
                        <input type="text" name="link_podcast" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan Podcast</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection