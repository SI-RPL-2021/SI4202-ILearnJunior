@extends('layouts.admin.index')
@section('content')
@section('menu', "Edit Postingan Blog")
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data</h4>
                <div class="card-header-action">
                    <a href="/detail_blog/{{$blog->id}}" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="/update_blog/{{$blog->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="name_blog" class="form-control @error('name_blog') is-invalid @enderror" value="{{$blog->name_blog}}">
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="content" class="form-control" id="floatingTextarea2" style="height: 100px">
                            {{$blog->content_blog}}"
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">thumbnail_blog</label>
                        <input type="file" name="thumbnail_blog" class="form-control @error('thumbnail_blog') is-invalid @enderror">
                    </div>
                    <div>
                        <img src="{{asset('gambar_blog/'. $blog->thumbnail_blog)}}" height="300" width="450" alt="">
                    </div>
                    <small>Kosongkan jika tidak akan mengubah thumbnail</small>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Perbarui Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection