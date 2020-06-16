
      <div class="row">
        <div class="input-field col s12 m6">
          <input placeholder="Primeiro Nome" id="nome" name="nome" type="text" class="validate" value="{{isset($dados_user->nome) ? $dados_user->nome : ''}}">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12 m6">
          <input placeholder="Sobrenome" id="sobrenome" name="sobrenome" type="text" class="validate" value="{{isset($dados_user->sobrenome) ? $dados_user->sobrenome : ''}}">
          <label for="sobrenome">Sobrenome</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="bio" class="materialize-textarea" name="bio" rows="5">
            {{isset($dados_user->bio) ? $dados_user->bio : ''}}
          </textarea>
          <label for="bio">Bio</label>
        </div>
      </div>

      <!--<div class="row">
        <div class="input-field col s12 m6">
          <input type="text" id="nascimento" class="datepicker">
          <label for="nascimento">Data de nascimento</label>
        </div>
      </div>-->

      <div class="file-field  input-field">

        <div class="btn blue">
          <span>Imagem</span>
          <input type="file" name="img">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
      </div>
      @if(isset($dados_user->img))
      <div class="input-field">
        <img width="150" src="{{asset($dados_user->img)}}" />
      </div>
      @endif


      <button class="btn deep-orange">Alterar</button>

