@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection
@section('js')
{{-- CKEditor --}}
<script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
        CKEDITOR.replace( 'editor1' );
</script>

<script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
            <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control {{ $errors->has('judul') ? ' is-invalid' : '' }}" value="{{ old('judul') }}" name="judul" required>
                    @if ($errors->has('judul'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('judul') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" multiple="" id="validatedCustomFile" name="foto">
                        <label class="custom-file-label" for="validatedCustomFile">Pilih foto ..</label>    
                    </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select class="form-control {{ $errors->has('id_kategori') ? ' is-invalid' : '' }}" name="id_kategori">
                        @foreach ($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach    
                    </select>
                    @if ($errors->has('id_kategori'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('id_kategori') }}</strong>
                        </span>
                        @endif
                </div>
                <div class="form-group">
                        <label for="">Tag</label>
                        <select name="tag[]" class="form-control {{ $errors->has('tag') ? ' is-invalid' : '' }}" id="s2_demo3" multiple="multiple">
                            @foreach ($tag as $data)
                        <option value="{{ $data->id }}"> {{ $data->nama}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('tag'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tag') }}</strong>
                        </span>
                        @endif
                    </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" class="form-control {{ $errors->has('konten') ? ' is-invalid' : '' }}" value="{{ old('konten') }}" id="editor1"></textarea>
                    @if ($errors->has('konten'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('konten') }}</strong>
                    </span>
                    @endif
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