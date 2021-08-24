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
                        </div>
                        <div class="panel-body mt-4">
                            <form action="/berita/{{ $berita->id }}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="message">Berita</label>
                                    <textarea name="ket_berita" id="ket_berita" class="form-control"
                                        placeholder="Masukkan berita yang ingin ditampilkan" rows=10>{{$berita->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" id="fileLabel" for="file">{{$berita->file}}</label>
                                        <input type="file" name="file" id="file" class="custom-file-input" >
                                    </div>
                                </div>                            
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
