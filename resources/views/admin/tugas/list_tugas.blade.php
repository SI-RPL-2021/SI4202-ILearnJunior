@extends('layouts.admin.index')
@section('content')
@section('menu', 'Pengumpulan Tugas')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Pengumpulan Tugas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-hover">
                                <th>No</th>
                                <th>Nama</th>
                                <th>File</th>
                                <tbody>
                                    <?php $index = 1; ?>
                                     @foreach ($tugas as $list)
                            <td>{{ $index++ }}</td>
                            <td>{{$list->name}}</td>
                            @if ($list->file != "")
                            <td>Mengumpulkan, Nama File : {{$list->file}}</td>
                            @endif
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
