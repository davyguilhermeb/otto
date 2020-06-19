@extends('layout.site')

@section('titulo','Editar conta | Painel de Controle')

@section('conteudo')

<nav class="blue">
  <div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/" class="breadcrumb">Início</a>
        <a href="#" class="breadcrumb">Configurações</a>
      </div>
    </div>
  </div>
</nav>


<div class="container inicio-conteudo fim-conteudo">
  <h2>Editar Perfil</h2>

  <div class="row">
    
    <form class="col s12" action="{{ route('site.painel.atualizar') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    @include('painel._form')

    

    </form>
  </div>
</div>

@endsection
