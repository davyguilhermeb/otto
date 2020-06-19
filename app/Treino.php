<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    //

    protected $fillable = [
        'id_alvo',
        'id_usuario',
        'numero',
        'situacao',
        'registros',
    ];

    public function registros () {
      return $this->hasMany(RegistroTreino::class, 'id_treino', 'id');
    }

    public function alvo () {
      return $this->hasOne(Alvo::class, 'id', 'id_alvo');
    }

}
