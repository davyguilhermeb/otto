@extends('layout.site')

@section('titulo','Início')

@section('conteudo')
<div class="container" id="treine">
  <div class="row">

    <h1>Vamos começar</h1>
    <div class="col s12 m12">
      <p>O número abaixo é seu 'elo'. Se estiver com um papel e caneta, anote-o no canto superior esquerdo, como na ilustração abaixo.</p>
    </div>


    <h3>{{ $treino['numero'] }}</h3>
    <!--<h4>{{ $treino['id_usuario'] }}</h4>-->

    <img src="#" width="180px" height="350px" />






    <p class="center-align">
      <a href="{{route('site.treinamento.ideograma', $proximo)}}" class="btn-floating btn-large cyan pulse"><i class="material-icons">play_arrow</i></a>
    </p>

  </div>
</div>

@endsection
