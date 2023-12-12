@extends('template/master')
@section('content')
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Owner</h3>
        </div>
        <form action="/owner.store/" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">

                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan Username">

                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" id="password" name="password"
                            placeholder="Masukkan Password">

                    </div>
                    <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Masukkan Email">

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('js')
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
        $('#deskripsi_form').summernote()
    })
</script>
@endsection