<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanWaserda extends Model
{
    use HasFactory;

    protected $table = "tb_laporanwaserda";
    protected $guarded = ['id'];
}
