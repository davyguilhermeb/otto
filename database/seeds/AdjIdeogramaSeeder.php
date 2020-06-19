<?php

use Illuminate\Database\Seeder;
use App\AdjIdeograma;

class AdjIdeogramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados = [
          'id_ideograma'=>1,
          'nome'=>"Quente",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>1,
          'nome'=>"Fria",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>1,
          'nome'=>"Suja",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>1,
          'nome'=>"Limpa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>1,
          'nome'=>"Clistarina",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        //terra

        $dados = [
          'id_ideograma'=>2,
          'nome'=>"Clara",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>2,
          'nome'=>"Escura",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);


        //Montanha

        $dados = [
          'id_ideograma'=>3,
          'nome'=>"Alta",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);


        $dados = [
          'id_ideograma'=>3,
          'nome'=>"Baixa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);


        //Energia

        $dados = [
          'id_ideograma'=>4,
          'nome'=>"Densa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>3,
          'nome'=>"Boa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>3,
          'nome'=>"Ruim",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>3,
          'nome'=>"Tranquila",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        //Movimento

        $dados = [
          'id_ideograma'=>4,
          'nome'=>"Forte",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>4,
          'nome'=>"Fraca",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>4,
          'nome'=>"Boa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>4,
          'nome'=>"Ruim",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        //Movimento

        $dados = [
          'id_ideograma'=>5,
          'nome'=>"Rápido",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>5,
          'nome'=>"Devagar",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);


        //Edificação

        $dados = [
          'id_ideograma'=>6,
          'nome'=>"Alta",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>6,
          'nome'=>"Baixa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>6,
          'nome'=>"Fechada",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);


        $dados = [
          'id_ideograma'=>6,
          'nome'=>"Aberta",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);



        $dados = [
          'id_ideograma'=>7,
          'nome'=>"Alta",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>7,
          'nome'=>"Baixa",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>7,
          'nome'=>"Cansada",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>7,
          'nome'=>"Em pé",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>7,
          'nome'=>"Sentada",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);

        $dados = [
          'id_ideograma'=>7,
          'nome'=>"Dormindo",
          'uso'=>0,
        ];

        AdjIdeograma::create($dados);





    }
}
