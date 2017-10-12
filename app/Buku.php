<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primarykey = 'id';
    protected $fillable = ['judul','noisbn','penulis','penerbit','tahun','stok','harga_pokok','harga_jual','ppn','diskon'];

    public function pasok(){
      return $this->hasMany('App\Pasok', 'id_buku');
    }

}
