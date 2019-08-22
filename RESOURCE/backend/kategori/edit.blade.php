@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id)}}" method="POST">
                <input type="hidden" name="_method" value="PATCH">    
                {{ csrf_field()}}
                <div class="form-group">
                        <label for="">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ $kategori->nama }}">
                </div>
                <div class="form-group">
                        <button type ="submit" class="btn btn-primary btn-floating" data-qt-block="body">Simpan</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection