@extends('layouts.client.index')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($kls as $dt)
        <div class="col-md-4">
            <div class="card-group">
                <div class="card">
                  <img src="{{asset('thumbnail_kelas/'. $dt->thumbnail)}}" class="card-img-top" width="350" height="250">
                  <div class="card-body">
                    <h5 class="card-title">{{$dt->name_kelas}}</h5>
                    <p class="card-text">{{$dt->description_kelas}}</p>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Lihat Kelas</button>
                  </div>
                </div>
        </div>
    </div>
</div>
    @endforeach
    </div>
</div>
 @endsection
