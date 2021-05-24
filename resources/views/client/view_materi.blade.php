<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')

<body>
  @include('layouts/client/navbar')

  <div class="container py-3">
    <div class="row">
      @foreach($mat as $x)
      <div class="card w-100">
        <div class="card-body">
          <a href="/detail_materi/{{ $x->id }}">
            <h5 class="card-title">{{$x -> judul}}</h5>
          </a>
          <p class="card-text">{{Str::limit($x->konten, 70)}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  @include('layouts/client/cdnjs')
</body>

</html>