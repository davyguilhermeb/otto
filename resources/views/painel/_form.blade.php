<!--<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
  <label>Título</label>
</div>-->


<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
          <input placeholder="Primeiro Nome" id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="sobrenome" type="text" class="validate">
          <label for="sobrenome">Sobrenome</label>
        </div>
      </div>
      <!--<div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">E-mail</label>
        </div>
      </div>-->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="bio" class="materialize-textarea" rows="5"></textarea>
          <label for="bio">Breve descrição sobre você.</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 m6">
          <input type="text" id="nascimento" class="datepicker">
          <label for="nascimento">Data de nascimento</label>
        </div>
      </div>

      <div class="row">
        <div class="file-field  input-field col s12">
          <div class="btn blue">
            <span>Imagem</span>
            <input type="file" name="imagem">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        @if(isset($registro->imagem))
        <div class="input-field">
          <img width="150" src="{{asset($registro->imagem)}}" />
        </div>
        @endif
      </div>



    </form>
  </div>
