<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    // Untuk mendaftarkan apa yang boleh diisi
    protected $fillable = [
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];
}

