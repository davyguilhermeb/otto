<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alvo extends Model
{
    //
    protected $fillable = ['nome', 'criado_por', 'endereco', 'google_maps', 'img', 'status', 'publico'];
}
