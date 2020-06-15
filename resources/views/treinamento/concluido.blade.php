@extends('layout.site')

@section('titulo','Concluido')

@section('conteudo')
<div class="container" id="treine">
  <div class="row">
    
  <div class="card-panel green">
    <p>{{$treino->numero}}</p>
  </div>
            
    <h1>Até aqui</h1>
    <div class="row">
      
        <div class="col s6 m4 l2">
          {{$treino->id}} concluido {{$alvo->nome}}

        </div>
     
    </div>

    <p class="center-align">
      <a href="{{route('site.painel.historico')}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>

    </p>
  </div>
</div>

@endsection
