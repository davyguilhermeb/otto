<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <title>@yield('titulo')</title>
  <!-- Bootstrap core CSS
  <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />-->

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
  <!--Import materialize.css-->

  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

  <link type="text/css" rel="stylesheet" href="{{ asset('css/estilo-geral.css') }}" />



</head>
<body>
@if(Auth::guest())
  <!--Menu Principal-->
  <nav class="z-depth-0 green">
    <div class="container">
      <div class="nav-wrapper">
        <a href="/" class="brand-logo">oTTo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/">Início</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Sessões Realizadas</a></li>
            <li><a href="{{route('site.login')}}">Acesse</a></li>
            <li><a href="{{route('site.cadastro')}}" class="waves-effect waves-light btn">Faça parte</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="/">Início</a></li>
    <li><a href="sass.html">Sobre</a></li>
    <li><a href="badges.html">Sessões Realizadas</a></li>
    <li><a href="{{route('site.login')}}">Acesse</a></li>
    <li><a href="#" class="waves-effect waves-light btn">Faça parte</a></li>
  </ul>

@else
  <!--Menu Painel-->
  <nav class="z-depth-0 green">
    <div class="container">
      <div class="nav-wrapper center">
        <a href="/" class="brand-logo">oTTo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
        <ul class="right">
          <li><a href=""><span class="new badge" data-badge-caption="novidades">0</span></a></li>
        </ul>
        <ul>

        </ul>
      </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li>
      <div class="user-view">
        <div class="background">
          @if($dados_user->img == "" or $dados_user->img == null)
            <img src="{{ asset('img/usuarios/perfil/sem-foto.png') }}" class="responsive-img" />
          @else
            <img src="{{asset($dados_user->img)}}" class="responsive-img" /> 
          @endif
          
        </div>
      </div>
    </li>
    <li><a href="/">Início</a></li>
    <li><a href="" class="waves-effect waves-light btn">Navegue</a></li>
    <li><a href="">Sessão</a></li>
    <li><a href="{{route('site.treinamento')}}">Treinamento</a></li>
    <li><a href="{{route('site.alvos')}}">Meus Alvos</a></li>
    <li><a href="{{route('site.historico')}}">Histórico</a></li>
    <li><a href="{{route('site.painel.configuracoes')}}">Configurações</a></li>
    <li><a href="{{route('site.login.sair')}}">Sair</a></li>
  </ul>




@endif
