@extends('layouts.client.index')
@section('content')
<div class="container py-3">
    <div class="row">
        <div class="card w-100">
            <div class="card-body">
                <form action="{{route('storeforum')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="isi">Konten</label>
                        <textarea name="isi" id="isi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-sm btn-success" type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
