<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BBM extends Model
{
    public $table = 'bbm';
    protected $fillable = ['nama','xenia','luxio','terios','ayla'];
    public $timestamps=false;
}
