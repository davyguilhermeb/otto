@extends('layout.site')

@section('titulo','Ideograma')

@section('conteudo')
<div class="container inicio-conteudo fim-conteudo" id="treine">
  <div class="row">

    <div class="card-panel green">
      <p>{{$treino->numero}}</p>
    </div>

    <h1>Escolha o ideograma</h1>
    <div class="row">
      @foreach($ideogramas as $ideograma)
        <div class="col s6 m4 l2 opc-ideograma">
          <a href="{{route('site.treinamento.informacao', $ideograma->id)}}">{{ $ideograma->nome }}</a>
        </div>
      @endforeach
    </div>

  </div>
</div>

@endsection
