<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'tb_pegawai';
    protected $fillable = ['nama','alamat'];
}
