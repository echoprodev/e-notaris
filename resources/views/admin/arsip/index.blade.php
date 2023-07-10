@extends('layouts.backend')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard Staff Notaris</h2>
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
                        <div>
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Arsip Permohonan</h4>
                                    <button class="btn btn-primary btn-round ml-auto">
                                        <i class="fa fa-print"></i>
                                        <a href="{{ route('permohonan.print') }}" class="text-white">Cetak Laporan</a>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No. Antrian</th>
                                                <th>Nama Klien</th>
                                                <th>Jenis Permohonan</th>
                                                <th>Status Permohonan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($permohonan as $data)
                                                <tr>

                                                    <td class="text-center">{{ $data->no_antrian }}</td>
                                                    <td class="text-center">{{ $data->nama_klien }}</td>
                                                    <td class="text-center">{{ $data->jenis_permohonan }}</td>
                                                    {{-- Status Pegawai --}}
                                                    @if ($data->status == 'Disetujui')
                                                        <td class="text-center text-white"><span
                                                                class="btn btn-sm btn-round text-bold btn-success">{{ $data->status }}</span>
                                                        </td>
                                                    @elseif ($data->status == 'Ditolak')
                                                        <td class="text-center text-white"><span
                                                                class="btn btn-sm btn-round text-bold btn-danger">{{ $data->status }}</span>
                                                        </td>
                                                    @elseif ($data->status == 'Pending')
                                                        <td class="text-center text-white"><span
                                                                class="btn btn-sm btn-round text-bold btn-warning">{{ $data->status }}</span>
                                                        </td>
                                                    @elseif ($data->status == 'Selesai')
                                                        <td class="text-center text-white"><span
                                                                class="btn btn-sm btn-round text-bold btn-primary">{{ $data->status }}</span>
                                                        </td>
                                                    @else
                                                        <td class="text-center text-white"><span
                                                                class="btn btn-sm btn-round text-bold btn-info">{{ $data->status }}</span>
                                                        </td>
                                                    @endif
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
