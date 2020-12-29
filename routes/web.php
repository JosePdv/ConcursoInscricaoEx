<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register'=>false]);


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/site/inscricao', 'InscricaoController@index')->name('inscricao')->middleware('auth');

Route::post('/formulario/store', 'FormularioController@store')
    ->name('formulario.store');


Route::get('/site/lista', 'InscricaoController@lista')
    ->name('formulario.lista')->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/ponctuation/{form_id}/insert', 'PonctuationController@insert')->name('ponctuation.insert')->middleware('auth');

Route::get('/ponctuation/{form_id}/insertVI', 'PonctuationController@insertVI')->name('ponctuation.insertVI')->middleware('auth');

Route::post('/ponctuation/store', 'PonctuationController@store')->name('ponctuation.store')->middleware('auth');

Route::post('/ponctuation/indeferido', 'PonctuationController@indeferido')->name('ponctuation.indeferido')->middleware('auth');

Route::get('/comprovante', 'ComprovanteController@index')->name('comprovante.index');

Route::get('/comprovante/pesquisa/', 'ComprovanteController@pesquisa')->name('comprovante.pesquisa');

Route::get('formulario/listaRevisao', 'FormularioController@listaRevisao')->name('formulario.listaRevisao')->middleware('auth');

Route::get('revisao/{form_id}/show', 'RevisaoController@show')->name('revisao.show')->middleware('auth');;

Route::get('revisao/{form_id}/showVI', 'RevisaoController@showVI')->name('revisao.showVI')->middleware('auth');

Route::post('revisao/aprovado', 'RevisaoController@aprovado')->name('revisao.aprovado')->middleware('auth');

Route::post('revisao/reprovado', 'RevisaoController@reprovado')->name('revisao.reprovado')->middleware('auth');

Route::post('revisao/avaliarNovamente', 'RevisaoController@avaliarNovamente')->name('revisao.avaliarNovamente')->middleware('auth');


#RECURSO USUÁRIO
Route::get('recurso/recursopesquisa', 'RecursoUserController@index')->name('recurso')->middleware('auth');
Route::get('recurso/pesquisa', 'RecursoUserController@pesquisa')->name('recurso.pesquisa')->middleware('auth');
Route::get('recurso/recursopedido', 'RecursoUserController@pedido')->name('recurso.pedido')->middleware('auth');
Route::any('recurso/{formulario_id}/enviar', 'RecursoUserController@enviar')->name('recurso.enviar')->middleware('auth');


#RECURSO AVALIADOR
Route::get('recurso/recursoLista', 'RecursoController@index')->name('recurso.lista');
Route::get('recurso/{recurso_id}/recurso', 'RecursoController@recursoUnico')->name('recurso.unico');
Route::get('recurso/{recurso_id}/recursoVI', 'RecursoController@recursoUnicoVI')->name('recurso.unicoVI');
Route::any('recurso/{recurso_aceito}/avaliar', 'RecursoController@avaliar')->name('recurso.avaliar');




Route::get('/reports/deferido', 'ReportController@deferido');
Route::get('/reports/indeferido', 'ReportController@indeferido');
