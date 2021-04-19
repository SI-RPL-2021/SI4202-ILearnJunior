@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Buat Postingan Video</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Materi Video</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success" role='alert '>
                    {{session('success')}}
                </div>
                @endif
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success" role = 'alert '>
        {{session('success')}}
        </div>
        @endif
                <form action="{{route('storevideo')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul Video</label>
                        <input type="text" name="name_video" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Video</label>
                        <textarea name="deskripsi_video" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Link Video</label>
                        <input type="text" name="link_video" class="form-control">
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