@extends('layout.site')

@section('titulo','Concluido')

@section('conteudo')
<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
      <div class="col s12">
        <h3>Treinamento concluído</h3>
      </div>
      <div class="col s12 m12">
        <p>Ao todo, você teve x palpites sobre o alvo.</p>
      </div>
    </div>
  
  </div>
</section>

<div class="container" id="treine">
  <div class="row">
  
        <div class="col s12 m10 offset-m1 l8 offset-l2">
          <p class="center">O alvo era:</p>
          <h4 class="center">{{$alvo->nome}}</h4>
          <p class="center">{{$alvo->endereco}}</p>

          <img class="responsive-img" src="{{asset($alvo->img)}}" alt="{{ $alvo->nome }}" />

          <p>{{$treino->numero}}</p>

        </div>
     
    </div>

    <p class="center-align">
      <a href="{{route('site.painel.historico')}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>

    </p>
  </div>
</div>

@endsection
