<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Mobil extends Model
{
    public $timestamps = false;
    protected $table = 'tb_mobil';
    // public $incrementing = false;
    protected $fillable = ['id_transaksi', 'kode_produksi', 'jenis', 'merk', 'transmisi', 'warna', 'spesifikasi', 'harga', 'tgl_masuk'];
}
