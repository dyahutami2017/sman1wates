@extends('layouts.appnew')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <h3 class="name">{{$siswa->nama}}</h3><hr>
                            </div>
                            <div class="profile-stat">
                                
                            </div>

                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="">Data Diri</h4>
                                <div class="row">
                                    <h5 class="col-md-1">Email</h5>
                                    <div class="col-md-2">{{$siswa->email}}</div>
                                </div>
                                <div class="row">
                                    <h5 class="col-md-1">Kelas</h5>
                                    <div class="col-md-2">{{$siswa->kelas}}</div>
                                </div>
                                <div class="row">
                                    <h5 class="col-md-1">Jurusan</h5>
                                    <div class="col-md-2">{{$siswa->jurusan}}</div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@stop