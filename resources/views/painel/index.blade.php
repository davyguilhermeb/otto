@extends('layout.site')

@section('titulo','Painel de Controle')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
      <h3>Olá, {{ $dados_user->nome}}</h3>
      <div class="col s12 m12">
        <p>Você não possui novas notificações.</p>
        <p>Nenhum alvo criado por você foi visualizado recentemente.</p>
      </div>
    </div>
  
  </div>
</section>

<div class="container" id="">
  <div class="row">

    <div class="col s12 m12">
      <p>Ainda não há nada para ver aqui.</p>
    </div>

    <div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Comece sua jornada</span>
          <p>Realize treinamentos com alvos reais.</p>
        </div>
        <div class="card-action">
          <a href="{{route('site.treinamento')}}">Começar</a>
          <!--<a href="#">This is a link</a>-->
        </div>
      </div>
    </div>

    <div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Cadastre novos alvos</span>
          <p>Seus alvos poderam ser visualizados por outros usuários da comunidade. <br>Você será avisado sempre que um de seus alvos for visualizado.</p>
        </div>
        <div class="card-action">
          <a href="{{ route('site.alvos.novo') }}">Cadastrar alvo</a>
          <!--<a href="#">This is a link</a>-->
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
