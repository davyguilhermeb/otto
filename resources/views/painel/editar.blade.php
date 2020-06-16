@extends('layout.site')

@section('titulo','Editar conta | Painel de Controle')

@section('conteudo')


<div class="container">
  <h2>Editar Perfil</h2>

  <div class="row">
    
    <form class="col s12" action="{{ route('site.painel.atualizar') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    @include('painel._form')

    

    </form>
  </div>
</div>

@endsection
