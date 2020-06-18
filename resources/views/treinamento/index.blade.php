@extends('layout.site')

@section('titulo','Treinamento')

@section('conteudo')
<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
      <div class="col s12">
        <h1>Treine como Observador</h1>
      </div>
      <div class="col s12">
        @if ($continuar_ultimo == 0)
          <p>Realize uma sessão guiada e pratique suas habilidades. É interessante que você possua uma ou mais folhas em branco e um lápis ou caneta. <br>Para começar, clique no botão abaixo</p>
        @else
          <p><span style="font-size: 1.6em;">Seu último treino não foi devidamente concluído.</span> <br>Ao clicar no botão abaixo, você será redirecionado ao seu treino e poderá continuá-lo ou concluí-lo.</p>
        @endif
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
