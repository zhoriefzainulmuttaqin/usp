<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "tb_kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = [
        "kategori_peminjam", "bunga",
    ];
}
