@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" novalidate>
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select name="role" id="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" required>
                                    <option value="siswa" selected>Siswa</option>    
                                    <option value="admin">Admin Sekolah</option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row" id="kelas_siswa">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Kelas') }}</label>

                            <div class="col-md-6">
                                <select name="kelas" id="kelas" class="form-control{{ $errors->has('kelas') ? ' is-invalid' : '' }}" required>
                                    <option value="" selected>Pilih Kelas</option>    
                                    <option value="10">Kelas 10</option>
                                    <option value="11">Kelas 11</option>
                                    <option value="12">Kelas 12</option>
                                </select>
                                @if ($errors->has('kelas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row"  id="jurusan_siswa"> 
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                            <div class="col-md-6">
                                <select name="jurusan" id="jurusan" class="form-control{{ $errors->has('jurusan') ? ' is-invalid' : '' }}" required>
                                    <option value="" selected>Pilih Jurusan</option>    
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                </select>
                                @if ($errors->has('jurusan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">
    $(document).ready(function () {
        $("#role").change(function () {
                if ($(this).val() != 'admin') {
                    $("#kelas_siswa").removeAttr('hidden');
                    $("#jurusan_siswa").removeAttr('hidden');
                }
                else {
                    $("#kelas_siswa").attr('hidden','hidden');
                    $("#jurusan_siswa").attr('hidden','hidden');
                }
            });
    })
</script>
@endsection
