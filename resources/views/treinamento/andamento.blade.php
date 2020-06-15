@extends('layout.site')

@section('titulo','Andamento')

@section('conteudo')
<div class="container" id="treine">
  <div class="row">
    
  <div class="card-panel green">
    <p>{{$treino->numero}}</p>
  </div>
            
    <h1>Até aqui</h1>
    <div class="row">
      @foreach($registros as $registro)
        <div class="col s6 m4 l2">
          {{$registro->ideograma->nome}} {{$registro->adjetivo->nome}}

        </div>
      @endforeach
    </div>

    <p class="center-align">
      <a href="{{route('site.treinamento.ideograma', $proximo)}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

      <a href="{{route('site.treinamento.concluir', $treino->id)}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>


  </div>
</div>

@endsection
