@extends('layout.site')

@section('titulo','Editar Alvo')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
      <h3>Edite nome do alvo</h3>
      <div class="col s12 m12">
        <p>Este alvo foi visualizado .. vezes</p>
        <p>A visualização mais bem pontuada sobre este alvo pode ser visualizada <a href="">neste link</a></p>
      </div>
    </div>
  
  </div>
</section>

<div class="container">
  <div class="row"><div class="col m10 offset-m1 s12">

    <form class="" action="{{route('site.alvos.atualizar')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      @include('alvo._form')

      <input type="hidden" name="id" value="{{ $registro->id }}" />

      <button class="btn deep-orange">Editar</button>
    </form>
  </div></div>
</div>
  <br>
  <br>
@endsection
