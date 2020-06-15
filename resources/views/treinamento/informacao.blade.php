@extends('layout.site')

@section('titulo','Infomação')

@section('conteudo')
<div class="container" id="treine">
  <div class="row">
  
    <div class="card-panel green">
      <p>{{$treino->numero}}</p>
    </div>
  </div>

  <div class="row">
    <h1>Escolha as informações</h1>
    
    <form action="{{route('site.treinamento.salvar')}}" method="POST">
    {{ csrf_field() }}
      @foreach($adjetivos as $adjetivo)
      <p>
        <label>
          <input type="checkbox" name="adjetivo[]" value="{{ $adjetivo->id }}" />
          <span>{{ $adjetivo->nome }}</span>
        </label>
      </p>
      @endforeach
      
      <input type="hidden" name="ideograma" value="{{ $ideo }}" />

      <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
        <i class="material-icons right">send</i>
      </button>
    </form>
    </div>

  </div>
</div>




@endsection
