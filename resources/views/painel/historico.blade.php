@extends('layout.site')

@section('titulo','Painel de Controle')

@section('conteudo')
<div class="container" id="treine">
  <div class="row">

    <h1>Histórico</h1> 

    @foreach($treinos as $treino)
        <div class="col s6 m4 l2">
          {{$treino->id}} 

        </div>
      @endforeach

  </div>
</div>

    
  

@endsection
