@extends('layouts.client.index')
@section('content')
<div class="container py-3">
    <div class="text-right mb-3">
        <a href="{{route('createforum')}}" class="btn btn-sm btn-secondary">Create Forum</a>
    </div>

    <div class="row">
     @foreach ($data as $forum)
        <div class="card w-100 mb-3 shadow">
            <div class="card-body">
                <a href="{{route('showforum',$forum->id)}}"><h5 class="card-title">{{$forum->judul}}</h5></a>
            <p class="card-text">{{$forum->isi}}</p>

            <div class="text-right">
                <p class="text-muted">{{$forum->author}}</p>
                <p class="text-muted">{{$forum->created_at}}</p>
            </div>
            <div>
                <a href="{{route('deleteforum',$forum->id)}}" class="btn btn-sm btn-danger">Delete</a>
                <a href="{{route('editforum',$forum->id)}}" class="btn btn-sm btn-primary">Update</a>
            </div>
            </div>
        </div>
        @endforeach
     </div>
</div>
  @endsection
