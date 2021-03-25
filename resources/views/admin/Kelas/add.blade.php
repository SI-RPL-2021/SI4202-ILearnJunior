@extends('layouts.admin.index')
@section('content')

<div class="section-header">
    <h1>Management Kelas</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="" class="btn btn-primary">
                        Tambah
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
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <td>
                                    <img src="" width="200" alt="" srcset="">
                                </td>
                                <td>
                                    <a href=""
                                        class="btn btn-warning">Detail</a>
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
