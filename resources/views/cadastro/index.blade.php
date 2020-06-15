@extends('layout.site')

@section('titulo','Cadastro')

@section('conteudo')
<div class="container">
  <div class="row"><div class="col m6 offset-m3 s12">
    <h3 class="center">Faça parte da nossa comunidade</h3>
    <p>Realize um rápido cadastro para ter acesso a treinamentos e uma comunidade online</p>
    <form class="" action="{{route('site.cadastro.adc')}}" method="post">
      {{ csrf_field() }}

      <div class="input-field">
        <input type="text" name="nome">
        <label>Primeiro Nome</label>
      </div>

      <div class="input-field">
        <input type="text" name="email">
        <label>E-mail</label>
      </div>

      <div class="input-field">
        <input type="password" name="password">
        <label>Senha</label>
      </div>

      <!--<div class="input-field">
        <input type="password" name="c_senha">
        <label>Confirmar Senha</label>
      </div>-->

      <button class="btn deep-orange">Cadastrar</button>
    </form>
  </div></div>
</div>
  <br>
  <br>
@endsection
