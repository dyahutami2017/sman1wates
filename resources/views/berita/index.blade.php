@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Berita</h3>
                            <form action="/berita" method="GET" class="navbar-form navbar-left row">
                                <div class="input-group col-md-6">
                                    <input type="text" name="cari" value="" class="form-control" placeholder="Cari Berita">
                                    <span class="input-group-btn"><button type="submit" value="cari" class="btn btn-info btn-lg"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Tambah data</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body mt-4">
                            <div class="table-responsive" style="height:100%">
                                <table class="table table-hover">
                                    <thead class="bg-info">
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($berita as $g)
                                        <tr>
                                            <td><img src="{{ url('/data_file/'.$g->file) }}" style="width:86px; height:86px"></td>
                                            <td><div>{{$g->keterangan}}</div></td>
                                            <td class="text-center">
                                                <a class="btn btn-warning btn-sm" href="/berita/{{ $g->id }}/edit"> <i class="far fa-edit text-white" aria-hidden="true"></i></a>
                                                <a class="btn btn-danger btn-sm" href="/berita/hapus/{{ $g->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$berita->render("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/berita/upload" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="message">Berita</label>
                        <textarea name="ket_berita" id="ket_berita" class="form-control"
                            placeholder="Masukkan berita yang ingin ditampilkan" rows=10></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label class="custom-file-label" id="fileLabel" for="file">Pilih Foto</label>
                            <input type="file" name="file" id="file" class="custom-file-input" >
                        </div>
                    </div>                            
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
