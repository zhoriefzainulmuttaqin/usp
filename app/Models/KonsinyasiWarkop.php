<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsinyasiWarkop extends Model
{
    use HasFactory;
    protected $table = 'konsinyasi_warkop';
    protected $fillable = [
        'id_anggota',
        'nama_barang',
        'saldo_awal_KW',
        'mutasi_angsuran',
        'mutasi_hpp',
        'mutasi_harga_jual',
        'angsuran_bln_dpn',
        'ke',
    ];
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
