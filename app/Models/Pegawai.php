<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'status'
    ];

    public function DatePicker()
    {
        return Carbon::parse($this->attributes['tgl_lahir'])
        ->translatedFormat('d F Y');
    }

    protected $hidden = [];
}
