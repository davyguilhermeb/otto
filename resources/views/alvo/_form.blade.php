    <div class="input-field">
        <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
        <label>Nome</label>
      </div>

      <div class="input-field">
        <input type="text" name="endereco">
        <label>Endereço</label>
      </div>

      <div class="input-field">
        <input type="text" name="gmaps">
        <label>Google Maps</label>
      </div>

      <div class="switch">
        <label>
        Público
        <input type="checkbox" name="publico">
        <span class="lever"></span>
        Privado
        </label>
      </div>
      <br><br>
      
      <div class="file-field  input-field">

        <div class="btn blue">
          <span>Imagem</span>
          <input type="file" name="img">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
      </div>
      @if(isset($registro->img))
      <div class="input-field">
        <img width="150" src="{{asset($registro->img)}}" />
      </div>
      @endif