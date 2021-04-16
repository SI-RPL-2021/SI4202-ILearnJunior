@extends('layouts.admin.index')
@section('content')
<div class="section-header">
    <h1>Buat Postingan Video</h1>
  </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Materi Video</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection