
<footer class="page-footer green">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Siga-nos nas redes</h5>
        <p class="grey-text text-lighten-4">Fique por dentro das novidades, interaja com a comunidade, receba dicas interessantes diariamente, ou simplesmente mostre ao mundo que você faz parte desse projeto.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2020 Copyright VisuRemota
    <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
  </div>
</footer>
</body>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();

    $(document).ready(function(){
      $('.carousel').carousel();
    });
    //$('.carousel.carousel-slider').carousel({
    //  fullWidth: true
    //});

    $(document).ready(function(){
      $('.datepicker').datepicker({
        format:'dd-mm-yyyy',
        i18n:{
          months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
          weekdaysAbbrev: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
          today: 'Hoje',
          clear: 'Limpar',
          close: 'Pronto',
          labelMonthNext: 'Próximo mês',
          labelMonthPrev: 'Mês anterior',
          labelMonthSelect: 'Selecione um mês',
          labelYearSelect: 'Selecione um ano',
          selectMonths: true,
          selectYears: 15,
          cancel: 'Cancelar',
          clear: 'Limpar'
        }
      });

    });



  });
</script>
</html>
