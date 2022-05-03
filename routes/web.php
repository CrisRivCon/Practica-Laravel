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

// Route::get('/', ['as'=>'index', function () {
//     return view('index');
// }]);
Route::get('/', ['as'=>'index', 'uses'=>'PagesController@home']);

Route::get('contacto', ['as' => 'contacto', 'uses'=>'PagesController@contacto']);

Route::get('saludo/{nombre?}', ['as'=>'saludo', 'uses'=>'PagesController@saludo'])->where('nombre', "[A-Za-z]+"); //para filtrar con regExp

Route::post('contactar', 'PagesController@mensaje');


// Route::get('paginaCris2', ['as'=> 'paginaModificable', function(){
//     return "Pagina con nombre URL modificable";
// }]); 