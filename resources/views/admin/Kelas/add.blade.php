@extends('layouts.admin.index')
@section('content')

<div class="section-header">
    <h1>Management Kelas</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kelas</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-primary">
                        Cari
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Tipe Kelas</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </div>
                </div>


@endsection
