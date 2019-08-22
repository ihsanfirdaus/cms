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
                <h5 class="card-header">Kategori</h5>
                <div class="card-body">
                <center> 
                    <form action="{{route('kategori.create')}}">
                        <button type="submit" class="btn btn-md btn-info btn-floating" title="Tambah Data"><li class="la la-plus"></li></button>
                    </form>
                </center>
                        <br>
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($kategori as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->slug}}</td>
                                    <td>
                                    <form action="{{ route('kategori.destroy',$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('kategori.edit',$data->id)}}" class="btn btn-md btn-warning btn-floating" title="Edit"><li class="la la-pencil"></li></a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body" title="Delete"><li class="la la-eraser"></li></button>
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