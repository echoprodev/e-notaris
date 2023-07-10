<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan = Permohonan::all();
        return view('admin.permohonan.index',[
             'permohonan' => $permohonan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode   = DB::table('permohonan')->select(DB::raw('MAX(RIGHT(no_antrian,3)) as kode'));
        $kd     = "";
        if ($kode->count() > 0) {
            foreach ($kode->get() as $row) {
                $tmp = ((int)$row->kode) + 1;
                $kd = sprintf("%03s", $tmp);
            };
        }else{
            $kd = "001";
        }
        return view('admin.permohonan.add',[
            'kode'  => $kode,
            'kd'    => $kd
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->dokumen;
        $name_file = $img->getClientOriginalName();

        $file = new Permohonan;
        $file->no_antrian            = $request->no_antrian;
        $file->nama_klien            = $request->nama_klien;
        $file->jenis_permohonan      = $request->jenis_permohonan;
        $file->dokumen               = $name_file;

        $img->move(public_path('Dokumen Permohonan/'), $name_file);
        $file->save();

        return redirect()->route('permohonan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permohonan = Permohonan::find($id);

        return view('admin.permohonan.edit',
        [
            'permohonan' => $permohonan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permohonan = Permohonan::findOrFail($id);

        $permohonan->update([
            'no_antrian' => $request['no_antrian'],
            'nama_klien' => $request['nama_klien'],
            'jenis_permohonan' => $request['jenis_permohonan'],
        ]);

        return redirect()->route('permohonan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Permohonan::find($id);

        $file = public_path('Dokumen Permohonan/'.$siswa->dokumen);

        if (file_exists($file)) {
            @unlink($file);
        }

        $siswa->delete();

        return redirect()->route('permohonan.index');
    }
}
