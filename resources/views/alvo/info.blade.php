@extends('layout.site')

@section('titulo','Alvo')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
        <div class="col s12">  
            <h3>Alvo</h3>
        </div>
        <div class="col s12">
            <p style="font-size: 1.3em;"></p>
        </div>
    </div>
  
  </div>
</section>


<nav class="blue">
  <div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="/" class="breadcrumb">Início</a>
        <a href="#" class="breadcrumb">{{ $registro->nome }}</a>
      </div>
    </div>
  </div>
</nav>

<div class="container inicio-conteudo fim-conteudo">
    <div class="row">
        <div class="col s12">
            <h3 class="center">{{ $registro->nome }}</h3>

            <p class="center">{{$registro->endereco}}</p>

            <p class="center"><a href="{{ $registro->google_maps }}" target="_blank">Link para o Google Maps</a></p>
        </div>

        <div class="col s12 m8 offset-m2">
            <img class="responsive-img" src="{{asset($registro->img)}}" alt="{{ $registro->nome }}" />
        </div>

        <div class="col s12">
            <p class="center">Ainda não é possível exibir o histórico de sessões envolvendo este alvo.</p>
        </div>
    </div>
</div>



@endsection





