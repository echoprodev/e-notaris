@extends('layouts.backend')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard Pimpinan</h2>
                    {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
                </div>
                <div class="ml-md-auto py-2 py-md-0">

                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">Tambah Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('pimpinan.simpan') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="kode_cabang">Nama Lengkap</label>
                                <input type="text" class="form-control" id="kode_cabang" name="name"
                                    placeholder="Input Nama Sesuai KTP" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Simpan
                                    Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
