@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title mb-3">Edit Admin Sekolah</h3><hr>
                        </div>
                        <div class="panel-body">
                            <form action="/admin/{{$admin->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="" placeholder="Nama" value="{{$admin->name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="email" class="form-control" id="" placeholder="Email" value="{{$admin->email}}">
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