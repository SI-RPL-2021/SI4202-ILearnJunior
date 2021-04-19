@extends('layouts.admin.index')
@section('content')
@section('menu', "Buat Postingan")
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data</h4>
            </div>
            <div class="card-body">
                @if (session('success'))    
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <form action="{{route ('store_blog')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="name_blog" class="form-control @error('name_blog') is-invalid @enderror" value="{{ old('name_blog') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="content" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                        {{ old('content_blog') }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">thumbnail_blog</label>
                        <input type="file" name="thumbnail_blog" class="form-control @error('thumbnail_blog') is-invalid @enderror">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
