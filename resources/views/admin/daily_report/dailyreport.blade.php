@extends('layouts.admin.index')
@section('content')
@section('menu', 'List Feedback Masuk')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>List Daily Report</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover">
                        <th>No</th>
                        <th>Nama Pengirim</th>
                        <th>Description</th>
                        <tbody>
                            @php
                            $index = 1;
                            @endphp
                            @foreach ($dailyReport as $dl)
                            <td>{{ $index++ }}</td>
                            <td>
                                {{$dl->name}}
                            </td>
                            <td>
                                {{ $dl->dsc }}
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