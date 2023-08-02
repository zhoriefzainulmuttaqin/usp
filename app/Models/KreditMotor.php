<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreditMotor extends Model
{
    use HasFactory;
    protected $table = 'kredit_motor';
    protected $fillable = [
        'id_anggota',
        'saldo_awal',
        'pemberian',
        'angsuran',
        'jasa_saldo_akhir',
        'jasa_awal',
        'jasa_bln_ini',
        'jasa_rl',
        'jasa_akhir',
        'pot_bln_dpn'
    ];
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
