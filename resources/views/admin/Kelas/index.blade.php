@extends('layouts.admin.index')
@section('content')

<div class="section-header">
    <h1>Management Kelas</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action ml-auto">
                    <a href="{{route('tambah_kelas')}}" class="btn btn-primary">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table align-items-center table-hover" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Tipe Kelas</th>
                                <th>Deskripsi</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                                     @foreach ($kls as $kelas)
                                <td>
                                    {{$index++}}
                                </td>
                                <td>
                                    {{$kelas->name_kelas}}
                                </td>
                                <td>
                                    {{$kelas->type_kelas}}
                                </td>
                                <td>{{$kelas->description_kelas}}</td>
                                <td>
                                    <img src="{{asset('thumbnail_kelas/'. $kelas->thumbnail)}}" width="200" alt="">
                                </td>
                                <td>
                                    <a href="/edit_kelas/{{$kelas->id}}" class="btn btn-success">Edit</a>
                                    <a href="/delete_kelas/{{$kelas->id}}" class="btn btn-danger">Delete</a>
                                </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
