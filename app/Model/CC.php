<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CC extends Model
{
    public $table = 'cc';
    protected $fillable = ['nama','xenia','luxio','terios','ayla'];
    public $timestamps=false;
}
