@extends('layout.site')

@section('titulo', 'Login')

@section('conteudo')

<div class="container">
  <div class="row"><div class="col m6 offset-m3 s12">
    <h3 class="center">Entrar</h3>
    <form class="" action="{{route('site.login.entrar')}}" method="post">
      {{ csrf_field() }}

      <div class="input-field">
        <input type="text" name="email">
        <label>E-mail</label>
      </div>

      <div class="input-field">
        <input type="password" name="senha">
        <label>Senha</label>
      </div>

      <button class="btn deep-orange">Entrar</button>
    </form>
  </div></div>
</div>
  <br>
  <br>
@endsection
