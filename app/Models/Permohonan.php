<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonan';

    protected $fillable = [
        'no_antrian',
        'nama_klien',
        'jenis_permohonan',
        'dokumen',
        'komentar',
        'status'
    ];
}
