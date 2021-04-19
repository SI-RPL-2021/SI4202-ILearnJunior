@extends('layouts.admin.index')
@section('content')
@section('menu', 'List Postingan Materi')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Materi</h4>
                </div>
                <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success" role = 'alert'>{{session('success')}}</div>
                @endif
                    <div class="table-responsive">
                        <table class="table align-items-center table-hover">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Action</th>
                                <tbody>
                                    <?php $index = 1; ?>
                                     @foreach ($mat as $post)
                            <td>{{ $index++ }}</td>
                            <td>{{ $post->judul }}</td>
                            <td>
                                <a href="/detailmateri/{{ $post->id }}"class="btn btn-sm btn-success">Detail</a>
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
