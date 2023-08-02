<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entri extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'entri';
    protected $fillable = [
        'id_anggota',
        'simpanan_wajib',
        'simpanan_pokok',
        'sw_awal',
        'sw_bulan_ini',
        'sw_akhir',
        'saldo_awal_pinjaman',
        'pemberian_pinjaman',
        'angs_pinjaman_pokok',
        'angs_pinjaman_partisipasi',
        'jml_partisipasi_bulan_ini',
        'jml_partisipasi_bulan_lalu',
        'jml_partisipasi_sampai_bulan_ini',
        'potongan_angsuran',
        'potongan_partisipasi',
        'potongan_ke_bulan_ini',
        'potongan_ke_bulan_lalu',

    ];
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
