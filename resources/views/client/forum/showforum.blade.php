@extends('layouts.client.index')
@section('content')
<div class="card w-100 mb-3 shadow">
    <div class="card-body">
        <h5 class="card-title text-center">{{$data->judul}}</h5>
        <a href="{{route('indexforum')}}" class="btn btn-sm btn-warning">Back</a>
        <hr>
    <p class="card-text">{{$data->isi}}</p>
    <div class="text-right">
        <p class="text-muted">{{$data->author}}</p>
        <p class="text-muted">{{$data->created_at}}</p>
    </div>
    <hr>
    <form action="{{route('storecomment')}}" method="POST">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="postid">
        <textarea name="comment" placeholder="Reply Disini" class="form-control"></textarea>
    <div class="text-right mt-3">
        <button class="btn btn-sm btn-primary">Post</button>
    </div>
    </form>
    @foreach ($comment as $cmt)
    <div class="card w-100 ml-3 mb-2 mt-2">
        <div class="card-body">
            <div class="card-text">
                {{$cmt->comment}}
                <div class="text-right">
                    <p class="text-muted">{{$cmt->nama}}</p>
                    <p class="text-muted">{{$cmt->created_at}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection
