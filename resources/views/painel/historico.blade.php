@extends('layout.site')

@section('titulo','Histórico')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
        <div class="col s12">  
            <h3>Seu histórico</h3>
        </div>
        <div class="col s12">
            <p class="sub-titulo">Você já realizou x atividades completas e y atividades incompletas.</p>
        </div>
    </div>
  
  </div>
</section>


<nav class="blue">
  <div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/" class="breadcrumb">Início</a>
        <a href="#" class="breadcrumb">Histórico</a>
      </div>
    </div>
  </div>
</nav>


<div class="container inicio-conteudo fim-conteudo">
  <div class="row">

    @foreach($treinos as $treino)
      @if ($treino->situacao == 1) 
          <div class="col s12 historico-box">
            <div class="img">
              <img class="responsive-img" src="{{asset($treino->alvo->img)}}" alt="{{ $treino->alvo->nome }}" />
            </div>
            <div class="info">
              <p>Número (elo): {{$treino->numero}}</p>

              <p>Alvo: <a href="{{ route('site.alvo', $treino->alvo->id) }}">{{$treino->alvo->nome}}</a></p>

              <p>Este treino ainda não possui avaliação.</p>

            </div>
          </div>
      @else
          <div class="col s12 historico-box">      
            <p class="center">Você possui um treinamento não concluído. <a href="{{ route('site.treinamento') }}">Clique aqui</a> para retomá-lo.</p>
          </div>
      @endif
    @endforeach

  </div>
</div>

    
  

@endsection
