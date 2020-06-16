<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

class UserController extends Controller
{
    //
    public function atualizar (Request $req) {
        $user_id = Auth::user()->id;

        $este_user = User::find($user_id);

        $dados = $req->all();

        if($req->hasFile('img')){
            $imagem = $req->file('img');
            $num = rand(1111,9999);
            $dir = "img/usuarios/perfil/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['img'] = $dir."/".$nomeImagem;
        }
 

        $este_user->nome = $req['nome'];
        $este_user->sobrenome = $req['sobrenome'];
        $este_user->bio = $req['bio'];
        $este_user->img = $dados['img'];

      
        $este_user->update();
        

        //User::find($user_id)->update($dados);

        return redirect()->route('site.painel.configuracoes');
    }

    
    
}
