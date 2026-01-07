<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey = 'iso';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        //Representa el código de esa modena USD
        'iso',
    ];
}
