@extends('layouts.admin.index')
@section('content')
@section('menu', "Edit Postingan Materi")
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Perbarui Materi</h4>
                <div class="card-header-action">
                    <a href="/detailmateri/{{$mat->id}}" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="/updatemateri/{{$mat->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{$mat->judul}}">
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="konten" class="form-control" id="floatingTextarea2" style="height: 100px">{{$mat->konten}}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
