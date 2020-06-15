@extends('layout.site')

@section('titulo','Treinamento')

@section('conteudo')
<section class="section light-green" id="treinamento-top">
  <div class="container">
  
    <div class="row">
      <h1>Treine como Observador</h1>
      <div class="col s12 m12">
        <p>Realize uma sessão guiada e pratique suas habilidades. É interessante que você possua uma ou mais folhas em branco e um lápis ou caneta. <br>Para começar, clique no botão abaixo</p>
      </div>
    </div>
  
  </div>
</section>
<section class="section" id="treinamento-cont">

</section>

<section class="section" id="treinamento-fot">
  <p class="center-align">
    <a href="{{route('site.treinamento.iniciar')}}" class="btn-floating btn-large cyan pulse"><i class="material-icons">play_arrow</i></a>
  </p>
</section>

    

  

@endsection
