<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home');


Route::get('/ticket', function() {
    return view('ticket');
})->name('ticket');

Route::get('/account', function() {
    return view('account');
})->name('account');

Route::get('/compra1', function() {
    return view('compra1');
})->name('account');

Route::get('/comprado1', function() {
    return view('comprado1');
})->name('account');

Route::get('/compra2', function() {
    return view('compra2');
})->name('account');

Route::get('/membros', function() {
    return view('membros');
})->name('account');

Route::get('/recuperarsenha', function() {
    return view('recuperarsenha');
})->name('account');

Route::get('/pagamento', function() {
    return view('pagamento');
})->name('account');

/*Route::get('/cadastro-jogos', function() {
    return view('cadastro-jogos');
})->name('cadastro-jogos');*/

Route::get('/exercicio', function() {
    return view('exercicio');
})->name('account');

Route::get('/jogos', "JogoController@store")->name('jogo.store');
Route::get('/jogo/cadastro', "JogoController@create")->name('jogos.create');
Route::get('/jogo', "JogoController@index")->name('jogos.index');
