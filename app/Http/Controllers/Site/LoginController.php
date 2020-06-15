<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    //
    public function index() {
      return view('login.index');
    }

    public function entrar(Request $req)
    {
      //$dados = $req->all();

      //return dd($dados);

      $credentials = [
        'email' => $req['email'],
        'password' => $req['senha'],
    ];

      if(Auth::attempt($credentials)){
        return redirect()->route('site.painel');;
      } else {
        return redirect()->route('site.login');
      }
    }

    public function sair() {
      Auth::logout();
      return redirect()->route('site.home');
    }


}
