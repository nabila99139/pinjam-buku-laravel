<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeminjam extends Model
{
    use HasFactory;

    protected $table = 'data_peminjam';

    public function telepon(){
        return $this->hasOne('App\Models\Telepon', 'id_peminjam');
    }

    public function jenis_kelamin(){
        return $this->belongsTo('App\Models\JenisKelamin', 'id_jenis_kelamin');
    }
}
