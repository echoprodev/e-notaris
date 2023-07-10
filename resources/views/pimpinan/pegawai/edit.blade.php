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
                        <h3 class="card-title">Tambah Data Program Studi</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('pimpinan.update', $pegawai->id)}}">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="kode_cabang">Nomor Induk Kependudukan</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nik" placeholder="Input NIK Sesuai KTP" value="{{$pegawai->nik}}">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Nama Lengkap</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nama" placeholder="Input Nama Sesuai KTP" value="{{$pegawai->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Tempat, Tanggal Lahir</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="kode_cabang" name="tempat_lahir" placeholder="Input Tempat Lahir" value="{{$pegawai->tempat_lahir}}">
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" id="kode_cabang" name="tgl_lahir" placeholder="Input Tempat Lahir" value="{{$pegawai->tgl_lahir}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Alamat</label>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="3">{{$pegawai->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="Aktif" {{ $pegawai->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Off" {{ $pegawai->status == 'Off' ? 'selected' : '' }}>Off</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
