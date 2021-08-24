@extends('layouts.appnew')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Profil Sekolah</h3>
                            <form action="/profil_sekolah" method="GET" class="navbar-form navbar-left row">
                            @foreach($data_profil as $profil)
                                <div class="col-md-6 text-left">
                                    <a class="btn btn-danger" href="/profil_sekolah/{{$profil->id}}/edit"><i class="far fa-edit text-white mr-2" aria-hidden="true"></i>Edit Profil</a>
                                </div>
                                
                            </form>
                        </div>
                        <div class="panel-body mt-4">
                           <div class="card">
                               <div class="card-body">
                               
                                <img src="{{url('data_file/'. $profil->gambar)}}" alt="image" style="width:500px; display: block; margin: 0 auto;" />
                                <table class="table table-hover mt-3">
                                <tbody>
                                    <tr>
                                        <td style="width:50%">Nama</td>
                                        <td style="width:50%">{{$profil->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>NPSN</td>
                                        <td>{{$profil->npsn}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$profil->status}}</td>
                                    </tr>
                                    <tr>
                                        <td>Akreditasi</td>
                                        <td>{{$profil->akreditasi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kurikulum</td>
                                        <td>{{$profil->kurikulum}}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{$profil->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <td>{{$profil->telepon}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$profil->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Visi</td>
                                        <td>{{$profil->visi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Misi</td>
                                        <td>{{$profil->misi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Sejarah</td>
                                        <td>{{$profil->sejarah}}</td>
                                    </tr>
                                </tbody>
                            </table>
                                @endforeach
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
