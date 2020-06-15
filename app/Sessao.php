<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    //

    public function alvo () {
      return $this->hasone(Alvo::class, 'id_alvo', 'id');
    }
}
