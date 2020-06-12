<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
    protected $table = 'eventos';

    public $primaryKey  = 'id_evento';
    protected $fillable = [
        'id_evento','nombre', 'descripcion', 'siglas','capacidad','fecha'
    ];

    public $timestamps = false;
}
