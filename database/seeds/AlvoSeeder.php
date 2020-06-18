<?php

use Illuminate\Database\Seeder;
use App\Alvo;

class AlvoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $dados = [
        'nome'=>"Museu Trianon/Masp",
        'endereco' => 'Av. Paulista, 1578 - Bela Vista, São Paulo - SP, 01310-200',
        'google_maps'=>"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14628.782787138132!2d-46.6558819!3d-23.561414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe904f6a669744da1!2sMuseu%20de%20Arte%20de%20S%C3%A3o%20Paulo%20Assis%20Chateaubriand!5e0!3m2!1spt-BR!2sbr!4v1589819238495!5m2!1spt-BR!2sbr",
        'img'=>'masp.jpg',
        'criado_por' => 1,
        'status' => 1,
        'publico' => 1,
      ];


        Alvo::create($dados);

        $dados = [
          'nome'=>"Cristo Redentor",
          'endereco' => 'Parque Nacional da Tijuca - Alto da Boa Vista, Rio de Janeiro - RJ',
          'google_maps'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.9541404674324!2d-43.21267588503358!3d-22.951915984988947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997fd5984aa13f%3A0x9dc984d7019502de!2sCristo%20Redentor!5e0!3m2!1spt-BR!2sbr!4v1591284288602!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
          'img'=>'masp.jpg',
          'criado_por' => 1,
          'status' => 1,
          'publico' => 1,
        ];
  
  
          Alvo::create($dados);
    }
}
