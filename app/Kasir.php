<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    //
    protected $table = 'kasir';
    protected $primarykey = 'id';
    protected $fillable = ['nama','alamat','telepon','status','username','password','akses'];
}
