<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    public $timestamps = false;
    protected $table = 'pengaduan';
    protected $primarykey = "id_pengaduan";
    protected $fillable = ['tanggal_pengaduan', 'NIK', 'isi_laporan', 'foto', 'status'];
}
