<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table ='barangmasuk';
    protected $fillable =['kode_barang, tanggal, nama_barang, jumlah'];
}
