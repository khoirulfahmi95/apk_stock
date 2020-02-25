<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['kode_barang , nama_pelanggan, nama_barang, tanggal_pesan, jumlah_pesan, status'];
}
