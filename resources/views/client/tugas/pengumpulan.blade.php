@extends('layouts.client.index')
@section('content')
<div class="container">
    <div class="row py-5 justify-content-center">
        <div class="card w-75 shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                  <h5 class="card-title text-center">PENGUMPULAN TUGAS</h5>
                  <hr>
                  @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('upload.post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control col-md-6" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="file">Upload File</label> 
                      <br>
                      <input type="file" name="file" id="file" class="mb-2">
                      <h6 class="text-muted" style="font-size: 10px;">Allowed : jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip</h6>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="ml-auto mr-5">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection