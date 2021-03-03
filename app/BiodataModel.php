<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataModel extends Model
{
    use HasFactory;
    protected $table = 'biodata';
    protected $fillable = ['nama', 'ttl', 'alamat', 'jenkel', 'telp'];
}
