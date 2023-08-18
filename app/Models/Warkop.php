<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warkop extends Model
{
    protected $table = "warkop";
    protected $fillable = [
        "deposit",
        "warkop",
        "pulsa",
        "kueh_titipan",
    ];
}
