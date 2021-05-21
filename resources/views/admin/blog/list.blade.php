@extends('layouts.admin.index')
@section('content')
@section('menu', 'List Postingan Blog')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Postingan Blog</h4>
                </div>
                @if (session('success'))    
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-hover">
                                <th>No</th>
                                <th>Thumbnail Blog</th>
                                <th>Nama Post</th>
                                <th>Action</th>
                                <tbody>
                                    <?php $index = 1; ?>
                                     @foreach ($blog as $post)
                            <td>{{ $index++ }}</td>
                            <td>
                                <img src="{{asset('gambar_blog/'. $post->thumbnail_blog)}}" height="50" width="50" alt="">
                            </td>
                            <td>{{ $post->name_blog }}</td>
                            <td>
                                <a href="/detail_blog/{{ $post->id }}"class="btn btn-sm btn-success">Detail</a>
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
