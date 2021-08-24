@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title mb-3">Edit Siswa</h3><hr>
                        </div>
                        <div class="panel-body">
                            <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="" placeholder="Nama" value="{{$siswa->nama}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="email" class="form-control" disabled id="" placeholder="Email" value="{{$siswa->email}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Kelas</label>
                                        <select name="kelas" class="form-control" id="exampleFormControlSelect1">
                                            <option value="10" @if($siswa->kelas=='10') selected @endif>10</option>
                                            <option value="11" @if($siswa->kelas=='11') selected @endif>11</option>
                                            <option value="12" @if($siswa->kelas=='12') selected @endif>12</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Jurusan</label>
                                        <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                                            <option value="IPA" @if($siswa->jurusan=='IPA') selected @endif>IPA</option>
                                            <option value="IPS" @if($siswa->jurusan=='IPS') selected @endif>IPS</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlTextArea1">Foto</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div> -->
                                              
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