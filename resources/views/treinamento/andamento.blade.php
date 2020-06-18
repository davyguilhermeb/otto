@extends('layout.site')

@section('titulo','Andamento')

@section('conteudo')
<div class="container" id="treine">
  <div class="row">
    
  <div class="card-panel green">
    <p>{{$treino->numero}}</p>
  </div>
            
    <h2>Até aqui você visualizou:</h2>
    <div class="row andamentos">
      @php $a = 0; @endphp
      @foreach($registros as $registro)
        <!--<div class="col s12 m6 l4 andamento_obervacao">-->
        <div class="col s12 l6 andamento_obervacao">
          <b>{{ $a." ".$registro[0]->ideograma->nome}}</b>
          <br>
          
          @php $y = 0; @endphp
          
          @while (isset($registro[$y]->adjetivo->nome)) 
            {{ $registro[$y]->adjetivo->nome }}
            <br>
            @php $y++; @endphp
          @endwhile

          @php $a++; @endphp
        </div>
      @endforeach
      
    </div>

    <p class="center-align">
      <a href="{{route('site.treinamento.ideograma', $proximo)}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

      <a href="{{route('site.treinamento.concluir', $treino->id)}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>


  </div>
</div>

@endsection
