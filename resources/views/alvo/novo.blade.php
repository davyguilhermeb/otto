@extends('layout.site')

@section('titulo','Novo Alvo')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
      <div class="col s12">
        <h3>Cadastre um novo Alvo</h3>
      </div>
      <div class="col s12">
        <p><span style="font-size: 1.6em;">Outros usuários poderam visualizar alvos publicados.<span></p>
        <p>Você será notificado de sempre que uma nova visualização relacionada ao seu alvo for realizada.</p>
      </div>
    </div>
  
  </div>
</section>


<nav class="blue">
  <div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/" class="breadcrumb">Início</a>
        <a href="{{route('site.alvos')}}" class="breadcrumb">Seus Alvos</a>
        <a href="#" class="breadcrumb">Novo</a>
      </div>
    </div>
  </div>
</nav>

<div class="container inicio-conteudo fim-conteudo">
  <div class="row"><div class="col m10 offset-m1 s12">

    <form class="" action="{{route('site.alvos.adc')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      @include('alvo._form')

      <button class="btn deep-orange">Cadastrar</button>
    </form>
  </div></div>
</div>
  <br>
  <br>
@endsection
