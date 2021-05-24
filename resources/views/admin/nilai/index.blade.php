@extends('layouts.admin.index')
@section('content')

<div class="section-header">
    <h1>Input Nilai</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action ml-auto">
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
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                                <th>Keterangan</th>
                                <th>Bukti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                                     @foreach ($inputnilai as $inputnilai)
                                <td>
                                    {{$index++}}
                                </td>
                                <td>
                                    {{$inputnilai->nama_siswa}}
                                </td>
                                <td>
                                    {{$inputnilai->kelas}}
                                </td>
                                <td>{{$inputnilai->mapel}}</td>
                                <td>{{$inputnilai->nilai}}</td>
                                <td>{{$inputnilai->keterangan}}</td>
                                <td>
                                    <img src="{{asset('bukti/'. $inputnilai->bukti)}}" width="100" alt="">
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
