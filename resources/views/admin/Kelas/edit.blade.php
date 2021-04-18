@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="/edit_store/{{$kelas->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" name="name_kelas" class="form-control" value="{{$kelas->name_kelas}}">
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Tingkat Kelas</label>
                        <select name="type_kelas" id="" class="form-control">
                            <option value="{{$kelas->type_kelas}}">{{$kelas->type_kelas}}</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Kelas</label>
                        <textarea name="description_kelas" class="form-control" style="height: 100px">{{$kelas->description_kelas}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Thumbnail Kelas</label>
                        <input type="file" name="thumbnail" class="form-control">
                        <img src="{{asset('thumbnail_kelas/'. $kelas->thumbnail)}}" height="300" width="450">
                        <small>Kosongkan jika tidak akan mengubah thumbnail</small>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Update Kelas</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
