{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Absensi</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/atlantis.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/demo.css') }}">
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">Laporan Absensi Kegiatan Organisasi Mahasiswa</div>
        </div>
        <div class="card-body">
            <table>
                @foreach ($mahasiswa as $data)
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td style="width: 15px; text-align:center;">:</td>
                        <td>{{ $data->nama_mahasiswa }}</td>
                    </tr>
                @endforeach
                @foreach ($mahasiswa as $data)
                    <tr>
                        <td>Nomor Induk Mahasiswa</td>
                        <td style="width: 15px; text-align:center;">:</td>
                        <td>{{ $data->nim_mahasiswa }}</td>
                    </tr>
                @endforeach
                @foreach ($mahasiswa as $data)
                    <tr>
                        <td>Program Studi</td>
                        <td style="width: 15px; text-align:center;">:</td>
                        <td>{{ $data->prodi_mahasiswa }}</td>
                    </tr>
                @endforeach
                @foreach ($mahasiswa as $data)
                    <tr>
                        <td>Tahun Masuk</td>
                        <td style="width: 15px; text-align:center;">:</td>
                        <td>{{ $data->angkatan_mahasiswa }}</td>
                    </tr>
                @endforeach
            </table>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Organisasi Mahasiswa</th>
                        <th scope="col">Struktur Organisasi Mahasiswa</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Indeks</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 0;
                    @endphp
                    @foreach ($absensi as $data)
                        <tr>
                            <td>{{ $id++ }}</td>
                            <td>{{ $data->nama_anggota }}</td>
                            <td>{{ $data->jabatan_ormawa }}</td>
                            <td>{{ $data->keterangan_mingguan }}</td>
                            <td>{{ $data->poin }}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html> --}}
<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Arsip Data Permohonan Notaris</h4>
        </h5>
    </center>
    <table class='table table-bordered mt-3 text-center' border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No. Urut Dokumen</th>
                <th>Nama Klien</th>
                <th>Jenis Permohonan</th>
                <th>Dokumen</th>
                <th>Tanggal Permohonan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permohonan as $data)
                <tr>
                    <td>{{ $data->no_antrian }}</td>
                    <td>{{ $data->nama_klien }}</td>
                    <td>{{ $data->jenis_permohonan }}</td>
                    <td>{{ $data->dokumen }}</td>
                    <td>{{ $data->created_at }}</td>
            @endforeach
        </tbody>
    </table>

</body>

</html>
