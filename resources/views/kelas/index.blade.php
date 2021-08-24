@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Kelas</h3>
                            <form action="/kelas" method="GET" class="navbar-form navbar-left row">
                                <div class="input-group col-md-6">
                                    <input type="text" name="cari" value="" class="form-control" placeholder="Nama Kelas">
                                    <span class="input-group-btn"><button type="submit" value="cari" class="btn btn-info btn-lg"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                </div>
                                @if((auth()->user()->name == 'admin'))
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Tambah data</button>
                                </div>
                                @endif
                            </form>
                        </div>
                        <div class="panel-body mt-4">
                            <table class="table table-hover" id="tbl_siswa">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Nama Kelas</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        @if((auth()->user()->name == 'admin'))
                                        <th class="text-center">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_kelas as $kelas)
                                    <tr>
                                        <td>{{$kelas->nama_kelas}}</td>
                                        <td>{{$kelas->kelas_id}}</td>
                                        <td>{{$kelas->jurusan_id}}</td>
                                        @if((auth()->user()->name == 'admin'))
                                        <td class="text-center">
                                            <a class="btn btn-warning btn-sm" href="/kelas/{{$kelas->id}}/edit"> <i class="far fa-edit text-white" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-sm" href="/kelas/{{$kelas->id}}/delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                <form action="/kelas/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Kelas </label>
                        <input name="nama_kelas" type="text" class="form-control" id="" placeholder="Nama Kelas">
                    </div>
                   
                    <div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" class="form-control" id="">
                            <option value="">Pilih Kelas</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control" id="">
                            <option value="">Pilih Jurusan</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>