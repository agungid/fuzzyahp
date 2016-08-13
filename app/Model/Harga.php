<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    public $table = 'harga';
    protected $fillable = ['nama','xenia','luxio','terios','ayla'];
    public $timestamps=false;
}
