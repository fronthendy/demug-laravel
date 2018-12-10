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
    return view('home');
});

Route::get('/usuarios', 'UsuariosController@mostrarUsuarios');

Route::get('/filmes', 'FilmesController@show');

Route::get('/filme/{id}', 'FilmesController@procurarFilmeId');

Route::get('/filme/{id}', 'FilmesController@procurarFilmeId');

Route::get('/atores', 'AtorController@index');

Route::get('/ator/{id}', 'AtorController@find');


Route::get('/ator/create/', 'AtorController@create');
Route::post('/ator/create/', 'AtorController@createPost');

Route::get('/ator/edit/{id}', 'AtorController@edit');
Route::put('/ator/edit/{id}', 'AtorController@editPost');

Route::get('/categorias', 'CategoriaController@read');

Route::get('/categoria/create', 'CategoriaController@create');
Route::post('/categoria/create', 'CategoriaController@createPost');

Route::get('/categoria/edit/{id}', 'CategoriaController@edit');
Route::put('/categoria/edit/{id}', 'CategoriaController@editPost');

Route::get('/categoria/delete/{id}', 'CategoriaController@delete');
Route::delete('/categoria/delete/{id}', 'CategoriaController@deletePost');


Route::get('/idioma/{id}', 'IdiomaController@exibir');

Route::get('/noticias', 'NoticiasController@nytimes');




