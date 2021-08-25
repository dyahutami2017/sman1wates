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
                                <h3 class="name">{{$admin->name}}</h3><hr>
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
                                    <div class="col-md-12 row">
                                        <h5 class="col-md-1">Nama</h5>
                                        <div class="col-md-2">{{$admin->name}}</div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <h5 class="col-md-1">Email</h5>
                                        <div class="col-md-2">{{$admin->email}}</div>
                                    </div>
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