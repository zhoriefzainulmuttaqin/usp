<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalPinjamanAnggota extends Model
{
    use HasFactory;
    protected $table = 'mod_pinjaman_anggota';
    protected $fillable = [
        'id_anggota',
        'manasuka_awal',
        'manasuka_masuk',
        'manasuka_keluar',
        'jasa_manasuka_awal',
        'jasa_manasuka_masuk',
        'jasa_manasuka_keluar',
        'manasuka_bln_dpn',
        'sospen_bln_ini',
        'sospen_bln_depan'
    ];
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
