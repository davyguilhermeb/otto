@extends('layout.site')

@section('titulo','Meus Alvos')

@section('conteudo')

<section class="section light-green" id="topos">
  <div class="container">
  
    <div class="row">
        <div class="col s12">  
            <h3>Alvos</h3>
        </div>
        <div class="col s12">
            <p style="font-size: 1.3em;">Ao todo, seus alvos foram vistos x vezes</p>
        </div>
    </div>
  
  </div>
</section>


<div class="container"> 
    <div class="row">
      <table>
        <thead>
          <tr>
            <!--<th>Id</th>-->
            <th>Nome</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Visto</th>
            <th>Edição</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <!--<td>{{ $registro->id }}</td>-->
              <td>{{ $registro->nome }}</td>
              <td><img height="60" src="{{asset($registro->img)}}" alt="{{ $registro->nome }}" /></td>
              <td>{{ $registro->publico }}</td>
              <td>x</td>
              <td>
                <a class="btn deep-orange" href="{{ route('site.alvos.editar',$registro->id) }}">Editar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('site.alvos.novo') }}">Adicionar</a>

    </div>

  </div>
@endsection





