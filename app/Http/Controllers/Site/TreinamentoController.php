<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Treino;
use App\Alvo;
use App\User;
use App\Ideograma;
use App\AdjIdeograma;
use App\RegistroTreino;
use Auth;

class TreinamentoController extends Controller
{
    //
    public function index() {
      $dados_user = Auth::user();
      return view('treinamento.index', compact('dados_user'));
    }


    //inex
    public function iniciar() {
      $dados_user = Auth::user();

      $ultimo_treino = auth()->user()->treinos()->orderBy('created_at', 'desc')->first();
      if ($ultimo_treino) {

        //verifica se o último treinamento iniciado foi concluido
        if ($ultimo_treino['situacao'] == 0) {
          //há um treinamento a ser concluido
          $proximo = $ultimo_treino['registros'] + 1;
          return redirect()->route('site.treinamento.ideograma', $proximo);
        }
        //o treinamento foi concluido
      }
      
      $primeiro_alvo = Alvo::get()->first();
      $primeiro_id = $primeiro_alvo->id;

      $alvos = Alvo::all();

      $qtd_alvos = count($alvos);
      $id_sort = rand($primeiro_id, $qtd_alvos + $primeiro_id);

      $alvo = $alvos->random();
      //$alvo = array_rand($alvos,1);

      $x= 0;
      //VEEEEEEEEEEEEEEEEEER ISSSSSSSSSSSO DEPOOOOOOOOOOOOOOOOOOOISSSSSSSSSSS
      while ($x == 0) {
        if (Alvo::find($id_sort)) {
          //ACHOU
         $x = 1;
        } else {
          //não achou, sorteia d enovo
          $id_sort = rand($primeiro_id, $qtd_alvos + $primeiro_id);
      
        }
        
      }

      //dd($qtd_alvos);


      $treino = new Treino();
      $treino->id_usuario = Auth::user()->id;
      $treino->id_alvo = $alvo->id;
      $treino->numero = random_int(10000001, 99999999);
      $treino->situacao = 0;
      $treino->registros = 0;

      $treino->save();

      $proximo = 1;

      //$registros = $treino->registros()->get();



      return view('treinamento.inicio', compact('treino', 'proximo', 'dados_user'));
    }

    
    //
    public function ideograma() {
      $dados_user = Auth::user();

      $este_treino =  auth()->user()->treinos()->orderBy('created_at', 'desc')->first();
      $treino = Treino::find($este_treino->id); 
      
      $registro = $treino->registros + 1;

      $ideogramas = Ideograma::all();

      return view('treinamento.ideograma', compact('ideogramas', 'treino', 'dados_user'));
      
    }


    public function informacao ($ideo) {
      $dados_user = Auth::user();

      $este_treino =  auth()->user()->treinos()->orderBy('created_at', 'desc')->first();
      $treino = Treino::find($este_treino->id); 
      
      $ideograma = Ideograma::find($ideo);

      $adjetivos = $ideograma->adjetivos()->get();

      $registro = $treino->registros + 1;
      

     // $adjetivos = DB::select('select * from adj_ideogramas where id = :id', ['id' => $ideograma]);
      
      return view('treinamento.informacao', compact('adjetivos', 'ideo', 'treino', 'dados_user'));


    }

    public function salvar (Request $req) {
      // $num, $ideo, $adj
      $dados_user = Auth::user();

      $ideograma = $req['ideograma'];
  
      $adjetivos = $req['adjetivo'];


      $este_treino =  auth()->user()->treinos()->orderBy('created_at', 'desc')->first();
      $treino = Treino::find($este_treino->id);
      
      $num_registro = $treino->registros + 1;

      //$checkboxes = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
      foreach($req['adjetivo'] as $adjetivo) {
        // here you can use $value
        $registro = new RegistroTreino();

        $registro->id_treino = $treino->id;
        $registro->id_ideograma = $ideograma;
        $registro->id_adj_ideograma = $adjetivo;
        $registro->registro = $num_registro;

        $treino->registros()->save($registro);
      }

      

      //atualiza campos registros do treino na tab treino
      $treino->registros = $treino->registros+1;

      $treino->update();

      return redirect()->route('site.treinamento.andamento', $treino->id);
      
    }


    public function andamento ($treino) {
      $dados_user = Auth::user();
      
      $treino = Treino::find($treino);
      

      //$treino->update();

      //$este_treino->registro()->id_treino = $este_treino->id;

      //echo $este_treino->id;

      $registros = $treino->registros()->get();

      $registros = $registros->groupBy('registro');

      $registros->toArray();

      //dd($registros);

      $proximo = $treino->registros + 1;
      
      return view('treinamento.andamento', compact('registros', 'treino', 'proximo', 'dados_user'));

    }


    public function concluir ($treino) {
      $dados_user = Auth::user();

      $treino = Treino::find($treino);

      $treino->situacao = 1;

      $treino->update();

      $id_alvo = $treino->id_alvo;

      $alvo = Alvo::find($id_alvo);


      return view('treinamento.concluido', compact('treino', 'alvo', 'dados_user'));
    }


}
