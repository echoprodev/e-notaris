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
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Data Pegawai</h4>
                                    <button class="btn btn-primary btn-round ml-auto">
                                        <i class="fa fa-plus"></i>
                                        <a href="{{ route('pimpinan.add') }}" class="text-white">Tambah Data Pegawai</a>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tempat, Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Status Pegawai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pegawai as $row)
                                                <tr>

                                                    <td>{{ $row->nik }}</td>
                                                    <td>{{ $row->nama }}</td>
                                                    <td>{{ $row->tempat_lahir }}, {{ $row->tgl_lahir }}</td>
                                                    <td>{{ $row->alamat }}</td>

                                                    {{-- Status Pegawai --}}
                                                    @if ($row->status == 'Aktif')
                                                        <td class="text-center"><i class="fas fa-check-square"
                                                                style="color: green; font-size: 25px;"></i></td>
                                                    @else
                                                        <td class="text-center"><i class="fas fa-window-close"
                                                                style="color: red; font-size: 25px;"></i></td>
                                                    @endif

                                                    <td>
                                                        {{-- Action Edit --}}
                                                        <a href="{{ route('pimpinan.edit', $row->id) }}"
                                                            class="btn btn-primary btn-sm"><i class="fas fa-edit"
                                                                style="width: 10px"></i></a>

                                                        {{-- Action Delete --}}
                                                        <form action="{{ route('pimpinan.delete', $row->id) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah anda ingin menghapus data? {{ $row->nama }}')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                @empty
                                                    <td colspan="6" class="text-center">Data Masih Kosong</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
