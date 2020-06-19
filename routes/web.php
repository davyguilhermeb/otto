<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    //return view('welcome');
    return view('home');
});
*/

Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

Route::get('/sobre', function () {
    return 'sobre';
});

Route::get('/alvo/{id?}', ['as' => 'site.alvo', 'uses' => 'Site\AlvoController@info']);


Route::get('/cadastro', ['as' => 'site.cadastro', 'uses' => 'Site\CadastroController@index']);
Route::post('/cadastro/criar', ['as' => 'site.cadastro.adc', 'uses' => 'Site\CadastroController@cadastrar']);


Route::get('/login', ['as' => 'site.login', 'uses' => 'Site\LoginController@index']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\LoginController@entrar']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'Site\LoginController@sair']);

Route::group(['middleware'=>'auth'],function(){

  Route::get('/painel', ['as' => 'site.painel', 'uses' => 'Site\PainelController@index']);
  Route::get('/painel/configurar/', ['as' => 'site.painel.configuracoes', 'uses' => 'Site\PainelController@configurar']);
  Route::post('/painel/configurar/atualizar', ['as' => 'site.painel.atualizar', 'uses' => 'Site\UserController@atualizar']);

  Route::get('/painel/historico', ['as' => 'site.painel.historico', 'uses' => 'Site\PainelController@historico']);


  Route::get('/feed', ['as' => 'site.feed', 'uses' => 'Site\PainelController@index']);


  Route::get('/treinamento', ['as' => 'site.treinamento', 'uses' => 'Site\TreinamentoController@index']);
  Route::get('/treinamento/inicio', ['as' => 'site.treinamento.iniciar', 'uses' => 'Site\TreinamentoController@iniciar']);
  Route::get('/treinamento/ideograma', ['as' => 'site.treinamento.ideograma', 'uses' => 'Site\TreinamentoController@ideograma']);
  Route::get('/treinamento/informacao/{ideo?}', ['as' => 'site.treinamento.informacao', 'uses' => 'Site\TreinamentoController@informacao']);
  Route::post('/treinamento/salvar/', ['as' => 'site.treinamento.salvar', 'uses' => 'Site\TreinamentoController@salvar']);
  Route::get('/treinamento/andamento/{treino?}', ['as' => 'site.treinamento.andamento', 'uses' => 'Site\TreinamentoController@andamento']);
  Route::get('/treinamento/concluir/{treino?}', ['as' => 'site.treinamento.concluir', 'uses' => 'Site\TreinamentoController@concluir']);


  Route::get('/historico', ['as' => 'site.historico', 'uses' => 'Site\PainelController@historico']);


  Route::get('/alvos', ['as' => 'site.alvos', 'uses' => 'Site\AlvoController@index']);
  Route::get('/alvos/novo', ['as' => 'site.alvos.novo', 'uses' => 'Site\AlvoController@novo']);
  Route::post('/alvos/criar', ['as' => 'site.alvos.adc', 'uses' => 'Site\AlvoController@cadastrar']);
  Route::get('/alvos/editar/{alvo?}', ['as' => 'site.alvos.editar', 'uses' => 'Site\AlvoController@editar']);
  Route::post('/alvos/atualizar', ['as' => 'site.alvos.atualizar', 'uses' => 'Site\AlvoController@atualizar']);

  
  //Route::get('/social', ['as' => 'site.social', 'uses' => 'Site\SocialController@index']);
  //Route::get('/social/{perfil?}', ['as' => 'site.social.perfil', 'uses' => 'Site\SocialController@perfil']);



  Route::get('/sessao', function () {
      return 'sessao';
  });

});
