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
                            <form action="/mapel/siswa" method="GET" class="navbar-form navbar-left row">
                                <div class="input-group col-md-6">
                                    <input type="text" name="cari" value="" class="form-control" placeholder="Nama Mata Pelajaran">
                                    <span class="input-group-btn"><button type="submit" value="cari" class="btn btn-info btn-md"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body mt-4">
                            <table class="table table-hover" id="tbl_siswa">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Nama Mata Pelajaran</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_mapel as $mapel)
                                    <tr>
                                        <td>{{$mapel->nama_mapel}}</td>
                                        <td>{{$mapel->kelas_id}}</td>
                                        <td>{{$mapel->jurusan_id}}</td>
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
