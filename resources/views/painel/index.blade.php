@extends('layout.site')

@section('titulo','Painel de Controle')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
      <div class="col s12">
        <h3>Olá, {{ $dados_user->nome}}</h3>
      </div>
      <div class="col s12">
        <p class="sub-titulo">Você não possui novas notificações.</p>
      </div>
    </div>
  
  </div>
</section>

<nav class="blue">
  <div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/" class="breadcrumb">Início</a>
      </div>
    </div>
  </div>
</nav>

<div class="container inicio-conteudo fim-conteudo" id="">
  <div class="row">

    <div class="col s12 m12">
      <p class="center">Ainda não há nada para mostrar aqui.</p>
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
