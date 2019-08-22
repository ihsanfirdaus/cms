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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                <form action="{{ route('artikel.update', $artikel->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">    
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control {{ $errors->has('judul') ? ' is-invalid' : '' }}" value="{{ $artikel->judul}}" name="judul" required>
                    @if ($errors->has('judul'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('judul') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br>
                    @if (isset($artikel) && $artikel->foto)
                    <p>
                            <img src="{{asset('assets/img/artikel/'.$artikel->foto.'')}}" 
                            style="margin-top:15px;
                                   margin-bottom:15px;
                                   width:100px;
                                   height:100px;" alt="foto"
                            class="card-img img-fluid mb-4">
                    </p>
                    @endif
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" multiple="" id="validatedCustomFile" name="foto" value="{{$artikel->foto}}">
                    <label class="custom-file-label" for="validatedCustomFile">{{ $artikel->foto }}</label>    
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select class="form-control" name="id_kategori">
                    @foreach ($kategori as $data)
                    <option value="{{ $data->id }}" 
                    {{$artikel->id_kategori == $data->id ? ' selected="selected" ':''}}>{{ $data->nama }}
                    </option>
                    @endforeach    
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tag</label>
                    <select name="tag[]" class="form-control multiple" id="s2_demo3" multiple>
                        @foreach ($tag as $data)
                    <option value="{{ $data->id }}"
                        {{ (in_array($data->id, $selected)) ? 'selected="selected"':''}}> {{ $data->nama }}
                    </option>
                        @endforeach
                    </select>
                    </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" class="form-control {{ $errors->has('konten') ? ' is-invalid' : '' }}" id="editor1">{{$artikel->konten }}</textarea>
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