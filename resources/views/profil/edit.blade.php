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
                            <form action="/profil_sekolah/{{$profil->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nama Sekolah</label>
                                        <input name="nama" type="text" class="form-control" id="" value="{{$profil->nama}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">NPSN</label>
                                        <input name="npsn" type="text" class="form-control" id="" value="{{$profil->npsn}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input name="status" type="text" class="form-control" id="" value="{{$profil->status}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Bentuk</label>
                                        <input name="bentuk" type="text" class="form-control" id="" value="{{$profil->bentuk}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Akreditasi</label>
                                        <input name="akreditasi" type="text" class="form-control" id="" value="{{$profil->akreditasi}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Kurikulum</label>
                                        <input name="kurikulum" type="text" class="form-control" id="" value="{{$profil->kurikulum}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="" value="{{$profil->alamat}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Telepon</label>
                                        <input name="telepon" type="text" class="form-control" id="" value="{{$profil->telepon}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="email" class="form-control" id="" value="{{$profil->email}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Visi</label>
                                        <textarea name="visi" class="form-control"
                                            placeholder="" rows=5>{{$profil->visi}}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Misi</label>
                                        <textarea name="misi" class="form-control"
                                            placeholder="" rows=10>{{$profil->misi}}
                                        </textarea>                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Sejarah</label>
                                        <textarea name="sejarah" class="form-control"
                                            placeholder="" rows=10>{{$profil->sejarah}}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                    <div class="custom-file">
                                        <label class="custom-file-label" id="fileLabel" for="file">{{$profil->gambar}}</label>
                                        <input type="file" name="gambar" id="file" class="custom-file-input" >
                                    </div>
                                </div>   
                                </div>                                             
                            <button type="submit" class="btn btn-primary mb-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop