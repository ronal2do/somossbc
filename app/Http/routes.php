<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.teste');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/videos', function () {
    return view('videos.videos');
});

Route::get('/contato', function () {
    return view('contatos.contato');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/template', function () {
    return view('templates.template');
});

Route::get('/projetos', function () {
    return view('welcome');
});

Route::get('/projetos/saude', function () {
    return view('projetos.saude.saude');
});

Route::get('/projetos/educacao', function () {
    return view('projetos.educacao.educacao');
});

Route::get('/projetos/infraestrutura', function () {
    return view('projetos.infra.infraestrutura');
});

Route::get('/projetos/habitacao', function () {
    return view('projetos.habitacao.habitacao');
});

Route::get('/projetos/programas', function () {
    return view('projetos.programas.sociais');
});

Route::group(['prefix' => 'dashboard'], function(){   /* 'prefix' => 'dashboard', 'middleware' => 'auth'*/

	Route::get('/', function (){
  	  return view('dashboard.home.home');
    });

    Route::get('newsletter', 'NewsController@index');

});

Route::get('/auth/login', function () {
    return 'Caiu no login';
});

Route::get('/cadastro', 'NewsController@create');
Route::post('/cadastro', 'NewsController@store');
	
Route::controller('/inscritos', 'inscritosController');




