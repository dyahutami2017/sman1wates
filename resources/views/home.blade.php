@extends('layouts.appnew')

@section('content')
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        @if(Auth::user()->role == 'admin')
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fas fa-school text-primary"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number text-muted">Profil Sekolah</span>
                    <a href="/profil_sekolah" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fas fa-users text-warning"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number text-muted">Siswa</span>
                    <a href="/siswa" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fas fa-users text-danger"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number text-muted">Admin Sekolah</span>
                    <a href="/admin" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fas fa-chalkboard-teacher text-success"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kelas</span>
                    <a href="/kelas" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fas fa-newspaper text-info"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Berita</span>
                    <a href="/berita" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        @else
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fas fa-chalkboard-teacher text-success"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kelas</span>
                    <a href="/kelas/siswa" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-light"><i class="fa fa-book text-info" aria-hidden="true"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Mata Pelajaran</span>
                    <a href="/mapel/siswa" class="info-box-text text-muted">Buka Menu <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        @endif
    </div>
    <!-- /.row -->
</section>
@endsection
