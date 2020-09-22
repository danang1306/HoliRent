<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';
    protected $primaryKey = 'kode_bus';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
