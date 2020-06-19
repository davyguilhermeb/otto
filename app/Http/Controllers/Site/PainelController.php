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
      //dd($dados_user);
      return view('painel/index', compact('dados_user'));
    }

    public function configurar () {
      
      $id = Auth::id();

      $dados_user = Auth::user();

      //$dados_user->bio = str_replace(array("\r", "\n"), '', $dados_user->bio);

      return view('painel/editar', compact('dados_user'));
    }


    public function historico () {
      $dados_user = Auth::user();

      //$id_usuario = Auth::user()->id;

      $treinos = auth()->user()->treinos()->orderBy('created_at', 'desc')->get();


      return view('painel/historico', compact('dados_user', 'treinos'));
      
    }
}
