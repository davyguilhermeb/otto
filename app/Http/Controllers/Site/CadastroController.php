<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CadastroController extends Controller
{
    //public

    public function index () {
      return view('cadastro.index');
    }

    public function adicionar (Request $req) {
      //$dados = $req->all();

      //User::create($dados);
      return 'ok';
    }

    public function cadastrar (Request $req) {
      $dados = $req->all();
      //dd($dados);

      User::create(['nome'=> $req->nome,
                    'sobrenome' => '',
                    'email' => $req->email,
                    'img' => '',
                    'bio' => '',
                    'password' => bcrypt($req->password)
                  ]);

    return redirect()->route('site.login');
    }



}
