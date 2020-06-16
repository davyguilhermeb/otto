<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class PainelController extends Controller
{
    //
    public function index () {
      $dados_user = Auth::user();

      return view('painel/index', compact('dados_user'));
    }

    public function configurar () {
      
      $id = Auth::id();

      $dados_user = Auth::user();

      return view('painel/editar', compact('dados_user'));
    }


    public function historico () {
      $id_usuario = Auth::user()->id;
      echo $id_usuario;
    }
}
