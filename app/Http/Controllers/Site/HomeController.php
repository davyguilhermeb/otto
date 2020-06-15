<?php

namespace App\Http\Controllers\Site;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    //



    public function index() {
      $contatos = [
        ["nome"=>"Maria", "tel"=>"998366831"],
        ["nome"=>"Pedro", "tel"=>"997786834"]
      ];

      //$usuario = new \App\User();
      //dd($usuario->lista());

      $testes = [
        (object)["nome"=>"Coisa 1", "tel"=>"998366831"],
        (object)["nome"=>"Coisa 2", "tel"=>"997786834"]
      ];

      if (Auth::guest()){
        return view('home', compact('contatos', 'testes'));  
      } else {
        return redirect()->route('site.painel');
      }
    }


}
