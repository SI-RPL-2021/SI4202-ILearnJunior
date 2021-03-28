@extends('layouts.admin.index')
@section('content')
@section('menu','Detail Postingan')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{$blog->name_blog}}</h4>
                <div class="card-header-action">
                    <a href="/edit_blog/{{$blog->id}}"class="btn btn-warning">Edit</a>
                    <a href="/delete_blog/{{$blog->id}}" class="btn btn-danger">Hapus</a>
                    <a href="{{route('listblog')}}" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td style="vertical-align: top"></td>
                                <td style="vertical-align: top" class="py-2 px-3"></td>
                                <td>{{$blog->content_blog}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('gambar_blog/'. $blog->thumbnail_blog)}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection