<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroTreino extends Model
{
    //

    public function ideograma () {
      return $this->hasOne(Ideograma::class, 'id', 'id_ideograma');
    }

    public function adjetivo () {
      return $this->hasOne(AdjIdeograma::class, 'id', 'id_adj_ideograma');
    }

    //public function registrotreino () {
      //return $this->belongsTo(Treino::class);
    //}
}
