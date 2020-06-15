<?php

use Illuminate\Database\Seeder;
use App\Ideograma;

class IdeogramaSeeder extends Seeder
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
          'nome'=>"Água",
        ];

        Ideograma::create($dados);
          echo 'Água Criado';


        //
        $dados = [
          'nome'=>"Terra",
        ];

        Ideograma::create($dados);
          echo 'Terra Criado';


        //
        $dados = [
          'nome'=>"Montanha",
        ];

        Ideograma::create($dados);
          echo 'Montanha Criado';



        //
        $dados = [
          'nome'=>"Energia",
        ];

        Ideograma::create($dados);
          echo 'Energia Criado';



        //
        $dados = [
          'nome'=>"Movimento",
        ];

        Ideograma::create($dados);
          echo 'Movimento Criado';



        //
        $dados = [
          'nome'=>"Edificação",
        ];

        Ideograma::create($dados);
          echo 'Edificação Criado';


        //
        $dados = [
          'nome'=>"Pessoa",
        ];

        Ideograma::create($dados);
          echo 'Pessoa Criado';


    }
}
