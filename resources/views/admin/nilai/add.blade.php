@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Nilai</h4>
                <div class="card-header-action">
                </div>
            </div>
            <div class="card-body">
                <form action="/index_nilai" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" value="{{ old('nama_siswa') }}">
                        @error('nama_siswa')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select name="kelas" id="" class="form-control">
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                        @error('kelas')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Mata Pelajaran</label>
                        <input type="text" name="mapel" class="form-control @error('mapel') is-invalid @enderror" value="{{ old('mapel') }}">
                        @error('mapel')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nilai</label>
                        <input type="number" name="nilai" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" class="form-control" style="height: 100px" id="ckeditor">
                        {{ old('keterangan') }}
                    </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Bukti Tugas</label>
                        <input type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror">
                        @error('bukti')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Input Nilai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
