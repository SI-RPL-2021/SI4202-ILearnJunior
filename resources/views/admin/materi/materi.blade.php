@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Materi</h1>
  </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Materi</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">Kembali</button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('data_materi')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="name_materi" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="content_materi" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                        </textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
