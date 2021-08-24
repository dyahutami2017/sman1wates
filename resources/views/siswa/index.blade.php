@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Siswa</h3>
                            <form action="/siswa" method="GET" class="navbar-form navbar-left">
                                <div class="input-group col-md-6">
                                    <input type="text" name="cari" value="" class="form-control" placeholder="Nama Siswa">
                                    <span class="input-group-btn"><button type="submit" value="cari" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body mt-4">
                            <table class="table table-hover" id="tbl_siswa">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_siswa as $siswa)
                                    <tr>
                                        <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama}}</a></td>
                                        <td>{{$siswa->email}}</td>
                                        <td>{{$siswa->kelas}}</td>
                                        <td>{{$siswa->jurusan}}</td>
                                        <td class="text-center"><a class="btn btn-warning btn-sm" href="/siswa/{{$siswa->id}}/edit"> <i class="far fa-edit text-white" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-sm" href="/siswa/{{$siswa->id}}/delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <a class="btn btn-info btn-sm" href="/siswa/{{$siswa->id}}/profile"><i class="fas fa-user-check    "></i></a></td>
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