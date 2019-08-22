@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('js')
<script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Artikel</h5>
                <div class="card-body">
                <center> 
                    <form action="{{route('artikel.create')}}">
                            <button type="submit" class="btn btn-md btn-info btn-floating" title="Tambah Data"><li class="la la-plus"></li></button>
                    </form>
                </center>
                        <br>
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                <th>Penulis</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($artikel as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->judul}}</td>
                                <td>{{ $data->slug}}</td>
                                <td>{{ $data->kategori->nama}}</td>
                                <td>
                                        <ol>
                                            @foreach ($data->tag as $tag)
                                                <li>{{ $tag->nama }}</li>
                                            @endforeach
                                        </ol>
                                </td>
                                <td>{{ $data->user->name}}</td>
                                <td>
                                <img src="{{asset('assets/img/artikel/'.$data->foto.'')}}" 
                                     style="width:100px; height:100px;" alt="foto"
                                     class="card-img img-fluid mb-4">
                                </td>

                                    <td>
                                    <form action="{{ route('artikel.destroy',$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('artikel.edit',$data->id)}}" class="btn btn-md btn-warning btn-floating" title="Edit"><li class="la la-pencil"></li></a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body" title="Delete"><li class="la la-eraser"></li></button>
                                        <a href="{{route('artikel.show',$data->id)}}" class="btn btn-md btn-success btn-floating" title="Show"><li class="zmdi zmdi-slideshow zmdi-hc-fw"></li></a>
                                    </form> 
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection