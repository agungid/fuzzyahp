<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    public $table = 'kriteria';

    protected $fillable = ['harga','bbm','warna','cc'];
     public $timestamps = false;
}
