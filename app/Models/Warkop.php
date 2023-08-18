<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warkop extends Model
{
    protected $table = "shu";
    protected $primaryKey = "id_shu";
    protected $fillable = [
        "tahun", "total",
    ];
}
