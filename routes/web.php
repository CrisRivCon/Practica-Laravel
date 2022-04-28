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

Route::get('/', ['as'=>'index', function () {
    return view('index');
}]);

Route::get('pagina1', ['as' => 'contacto', function(){ //ruta para nombres de paginas
    return view('contacto');
}]);

Route::get('pagina2/{nombre?}', ['as'=>'saludo', function($nombre = "Invitado"){ //Para que se requiera {nombre}, para que si no le pasas parámetros aparezca por defecto "Invitado" {nombre?}
    // return view('saludo', ['nombre'=> $nombre]);
    // return view('saludo')->with(['nombre'=>$nombre]);
    return view('saludo', compact('nombre')); //Se puede pasar parametros para las vistas de las 3 formas pero esta es la manera mas limpia de hacerlo
}])->where('nombre', "[A-Za-z]+"); //para filtrar con regExp

Route::get('paginaCris2', ['as'=> 'paginaModificable', function(){
    return "Pagina con nombre URL modificable";
}]);