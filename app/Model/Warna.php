<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    public $table = 'warna';
    protected $fillable = ['nama','xenia','luxio','terios','ayla'];
    public $timestamps=false;
}
