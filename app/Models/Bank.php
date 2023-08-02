<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = "bank";
    protected $primaryKey = "id_bank";
    protected $fillable = [
        "nama_bank",
    ];
}
