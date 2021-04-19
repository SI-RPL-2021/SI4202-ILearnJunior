@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.kelas.edit',($kelas->id)) }}" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="javascript:void(0)" onclick="alertconfirmn('{{ route('admin.kelas.hapus',($kelas->id)) }}')" class="btn btn-danger">
                        Hapus
                    </a>
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td>Tipe Kelas</td>
                                <td class="px-2 py-1">:</td>
                                <td>
                                    @if ($kelas->type_kelas == 7)
                                    Tujuh
                                    @elseif($kelas->type_kelas == 8)
                                    Delapan
                                    @elseif($kelas->type_kelas == 9)
                                    Sembilan
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top">Deskripsi Kelas</td>
                                <td style="vertical-align: top" class="px-2 py-1">:</td>
                                <td style="vertical-align: top">
                                    {!! $kelas->description_kelas !!}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $kelas->thumbnail) }}" width="100%" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
