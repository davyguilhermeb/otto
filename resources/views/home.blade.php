@extends('layout.site')

@section('titulo','Home Page')

@section('conteudo')
<div class="container">
  <h1>Bem Vindo!</h1>
  <div class="row">
    <p>Somos uma comunidade online destinada a entusiastas e outros tipos de interessados em Visualizações Remotas.</p>
  </div>
</div>
<div class="carousel">
  <a class="carousel-item" href="#one!"><img src="img/slider_home/3.jpg"></a>
  <a class="carousel-item" href="#two!"><img src="img/slider_home/5.jpg"></a>
  <a class="carousel-item" href="#one!"><img src="img/slider_home/3.jpg"></a>
  <a class="carousel-item" href="#two!"><img src="img/slider_home/5.jpg"></a>
</div>

@endsection

@section('nao_vai')


  @foreach($contatos as $contato)
    <p>{{ $contato['nome'] }}</p>
    <p>{{ $contato['tel'] }}</p>



  @endforeach

    <hr />

  @foreach($testes as $teste)
    <p>{{ $teste->nome }}</p>
    <p>{{ $teste->tel }}</p>

  @endforeach

@endsection
