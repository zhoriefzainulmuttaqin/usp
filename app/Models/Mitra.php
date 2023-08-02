<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = "mitra";

    protected $primaryKey = "id_mitra";

    protected $fillable = [
        "nama_mitra",
        "cp",
        "alamat",
        "RT",
        "RW",
        "kelurahan",
        "NPWP",
        "email",
        "no_hp",
    ];
}
