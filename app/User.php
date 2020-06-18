<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'sobrenome', 'email', 'img', 'bio', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /*public function lista(){
      return (object) [
        'name' => 'Davy',
        'email' => 'vygui@yahoo.com.br'
      ];
    }**/

    public function treinos () {
      return $this->hasMany(Treino::class, 'id_usuario', 'id');
    }

    public function alvos () {
      return $this->hasMany(Alvo::class, 'criado_por', 'id');
    }

}
