<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')

<body>
    @include('layouts/client/navbar')

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-8">
                <h4>{{$mat2->judul}}</h4>
                <h6 class="text-muted">Posted by : Admin, {{$mat2 -> created_at ->format('Y-m-d')}}</h6>
                <p>
                    {{$mat2 -> konten}}
                </p>
            </div>
            <div class="col-md-4">
                @foreach ($mat as $x)
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
    </div>

    @include('layouts/client/cdnjs')
</body>

</html>