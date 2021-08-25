@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Admin</h3>
                            <form action="/admin" method="GET" class="navbar-form navbar-left">
                                <div class="input-group col-md-6">
                                    <input type="text" name="cari" value="" class="form-control" placeholder="Nama Admin">
                                    <span class="input-group-btn"><button type="submit" value="cari" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body mt-4">
                            <table class="table table-hover" id="admin">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_admin as $admin)
                                    <tr>
                                        <td><a href="/admin/{{$admin->id}}/profile">{{$admin->name}}</a></td>
                                        <td>{{$admin->email}}</td>
                                        <td class="text-center"><a class="btn btn-warning btn-sm" href="/admin/{{$admin->id}}/edit"> <i class="far fa-edit text-white" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger btn-sm" href="/admin/{{$admin->id}}/delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <a class="btn btn-info btn-sm" href="/admin/{{$admin->id}}/profile"><i class="fas fa-user-check    "></i></a></td>
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