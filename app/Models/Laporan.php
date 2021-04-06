<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = "laporans";

    public function rw(){
        return $this->belongsTo(Rw::class,'id_rw');
    }
}