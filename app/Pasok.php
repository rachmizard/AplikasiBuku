<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table = 'pasok';
    protected $primarykey = 'id';
    protected $fillable = ['id_distributor','id_buku','jumlah','tanggal'];

    public function distributor()
    {
        return $this->belongsTo('App\Distributor', 'id_distributor', 'id');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku', 'id_buku', 'id');
    }
}
