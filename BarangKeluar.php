<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table ='barangkeluar';
    protected $fillable = ['kode_barang, tanggal, nama_barang, nama_peminta, jumlah'];
}
