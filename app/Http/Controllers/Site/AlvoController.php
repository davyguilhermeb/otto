<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Alvo;
use Auth;

class AlvoController extends Controller
{
    //

    public function index () {
        $dados_user = Auth::user();

        $registros = Alvo::all();

        return view('alvo.index', compact('dados_user', 'registros'));
    }

    public function novo () {
        $dados_user = Auth::user();

        return view('alvo.novo', compact('dados_user'));
    }

    public function cadastrar (Request $req) {
        $dados = $req->all();
        $dados_user = Auth::user();
        //dd($dados);

        $a_imagem = '';

        if($req->hasFile('img')){
            $imagem = $req->file('img');
            $num = rand(111111,999999);
            $dir = "img/alvos/principal/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $a_imagem = $dir."".$nomeImagem;
        }

        Alvo::create([
                    'nome'=> $req->nome,
                    'criado_por' => $dados_user->id,
                    'endereco' => $req->endereco,
                    'google_maps' => $req->gmaps,
                    'img' => $a_imagem, //ver isso               
                    'status' => 1,
                    'publico' => 1
        ]);

        $este_alvo =  auth()->user()->alvos()->orderBy('created_at', 'desc')->first();
        //$alvo = Alvo::find($este_alvo->id);
        $alvo = $este_alvo->id;

        
        

        return redirect()->route('site.alvos.editar', compact('alvo'));
    }

    public function editar ($id) {
        $dados_user = Auth::user();

        $registro = Alvo::find($id);
        
        return view('alvo.editar', compact('dados_user', 'registro'));
    }

    public function atualizar (Request $req) {

        $user_id = Auth::user()->id;

        $dados = $req->all();

        $este_alvo = Alvo::find($dados['id']);

        $a_imagem = "";

        //Verifica se o alvo a ser alterado é do usuário
        if ($este_alvo->criado_por == $dados['id']) {
            //é do usuário
            if($req->hasFile('img')){
                $imagem = $req->file('img');
                $num = rand(111111,999999);
                $dir = "img/alvos/principal/";
                $ex = $imagem->guessClientExtension();
                $nomeImagem = "imagem_".$num.".".$ex;
                $imagem->move($dir,$nomeImagem);
                $a_imagem = $dir."".$nomeImagem;

                $este_alvo->img = $a_imagem;
            }

            $este_alvo->nome = $dados['nome'];
            $este_alvo->endereco = $dados['endereco'];
            $este_alvo->google_maps = $dados['gmaps'];


            $este_alvo->update();

        } else {
            //não é do usuário
            echo 'Não é do usuário';
        }

        $alvo = $este_alvo->id;
        
        return redirect()->route('site.alvos.editar', compact('alvo'));

        
    }

}
