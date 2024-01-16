<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapemilih extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'NomorHP',
        'Kampung',
        'Rt',
        'Rw',
        'Desa',
        'Kecamatan',
        'TPS',
        'Nama_Relawan',
        'Koordinator'
    ];
}
