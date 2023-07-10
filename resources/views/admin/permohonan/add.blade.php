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
                        <h3 class="card-title">Tambah Data Permohonan</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('permohonan.simpan')}}" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group">
                                <label for="kode_cabang">Nomor Antrian</label>
                                <input type="text" class="form-control" id="kode_cabang" name="no_antrian" placeholder="" value="{{'NAP-'.$kd}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Nama Lengkap</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nama_klien" placeholder="Input Nama Sesuai KTP" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Jenis Permohonan</label>
                                <select name="jenis_permohonan" id="" class="form-control">
                                    <option value="" selected disabled>Pilih Permohonan</option>
                                    <option value="Pinjaman Bank">Permohonan Akat Kredit - Pinjaman Bank</option>
                                    <option value="Perjanjian Jual Beli">Perjanjian Jual Beli</option>
                                    <option value="Perjanjian Sewa">Perjanjian Sewa</option>
                                    <option value="Perjanjian Kuasa">Perjanjian Kuasa</option>
                                    <option value="Sertifikat Jual Beli">Sertifikat Jual Beli</option>
                                    <option value="Sertifikat Hibah">Sertifikat Hibah</option>
                                    <option value="Sertifikat APHB">Sertifikat APHB (Akta Pembagian Hak Bersama)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Dokumen Pengajuan Permohonan</label>
                                <input type="file" name="dokumen" class="form-control">
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
