<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table = 'distributor';
    protected $primarykey = 'id';
    protected $fillable = ['nama_distributor','alamat','telepon'];

    public function pasok()
    {
        return $this->hasMany('App\Pasok', 'id_distributor', 'id');
    }
}
