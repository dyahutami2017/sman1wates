@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title mb-3">Edit Kelas</h3><hr>
                        </div>
                        <div class="panel-body">
                            <form action="/mapel/{{$mapel->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nama Mata Pelajaran</label>
                                        <input name="nama_mapel" type="text" class="form-control" id="" placeholder="Nama Mata Pelajaran" value="{{$mapel->nama_mapel}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Kelas</label>
                                        <select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
                                            <option value="10" @if($mapel->kelas_id=='10') selected @endif>10</option>
                                            <option value="11" @if($mapel->kelas_id=='11') selected @endif>11</option>
                                            <option value="12" @if($mapel->kelas_id=='12') selected @endif>12</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Jurusan</label>
                                        <select name="jurusan_id" class="form-control" id="exampleFormControlSelect1">
                                            <option value="IPA" @if($mapel->jurusan_id=='IPA') selected @endif>IPA</option>
                                            <option value="IPS" @if($mapel->jurusan_id=='IPS') selected @endif>IPS</option>
                                        </select>
                                    </div>
                                </div>                                             
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop