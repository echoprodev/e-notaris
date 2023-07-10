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
                        <h3 class="card-title">Edit Data Permohonan</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('Data-Permohonan.update', $permohonan->id)}}" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="kode_cabang">Nomor Antrian</label>
                                <input type="text" class="form-control" id="kode_cabang" name="no_antrian" placeholder="" value="{{$permohonan->no_antrian}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Nama Lengkap</label>
                                <input type="text" class="form-control" id="kode_cabang" name="nama_klien" placeholder="Input Nama Sesuai KTP" value="{{$permohonan->nama_klien}}">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Jenis Permohonan</label>
                                <input type="text" value="{{$permohonan->jenis_permohonan}}" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Dokumen Pengajuan Permohonan</label>
                                <a href="{{ asset('Dokumen Permohonan/' .$permohonan->dokumen)}}" target="_blank" rel="noopener noreferrer" class="form-control">{{$permohonan->dokumen}}</a>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Status Permohonan</label>
                                <select name="status" id="" class="form-control">
                                    <option value="" selected disabled>Pilih Status</option>
                                    <option value="Ditolak"{{ $permohonan->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    <option value="Disetujui" {{ $permohonan->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                                    <option value="Direvisi" {{ $permohonan->status == 'Direvisi' ? 'selected' : '' }}>Direvisi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Komentar Pimpinan</label>
                                <textarea name="komentar" id="" cols="30" rows="10" class="form-control">{{$permohonan->komentar}}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection