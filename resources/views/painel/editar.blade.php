@extends('layout.site')

@section('titulo','Editar conta | Painel de Controle')

@section('conteudo')
<div class="container">
  <h2>Editar Perfil</h2>
  <form ation="{{ route('site.painel.atualizar') }}" method="post" enctype="multipart/form-data">
    @include('painel._form')
  </form>
</div>

@endsection
