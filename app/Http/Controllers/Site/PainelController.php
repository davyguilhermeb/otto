<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PainelController extends Controller
{
    //
    public function index () {
      return view('painel/index');
    }

    public function configurar () {
      $id = Auth::id();

      $registro = Auth::user();

      return view('painel/editar', compact($registro));
    }


    public function historico () {
      $id_usuario = Auth::user()->id;
      echo $id_usuario;
    }
}
