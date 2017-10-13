<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primarykey = 'id';
    protected $fillable = ['id_buku','id_kasir','jumlah','total', 
    'tanggal'];

    public function buku(){
    	return $this->belongsTo('App\Buku', 'id_buku', 'id');
    }

    public function kasir(){
    	return $this->belongsTo('App\Kasir', 'id_kasir', 'id');
    }

}
