@extends('layouts.admin.index')
@section('content')
@section('menu', 'List Feedback Masuk')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Feedback</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-hover">
                                <th>No</th>
                                <th>Nama Pengirim</th>
                                <th>Email</th>
                                <th>Feedback</th>
                                <tbody>
                                    @php
                                        $index = 1;
                                    @endphp
                            @foreach ($feedback as $fb)
                            <td>{{ $index++ }}</td>
                            <td>
                                {{$fb->name}}
                            </td>
                            <td>
                                {{ $fb->email }}
                            </td>
                            <td>
                                {{$fb->feedback}}
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
