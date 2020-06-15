<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideograma extends Model
{
    //
    public function adjetivos () {
        return $this->hasMany(AdjIdeograma::class, 'id_ideograma', 'id');
    }
}
