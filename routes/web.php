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

Route::get('/', 'pruebaControlador@welcome');

Route::get('/prueba', function(){
return 'Hola soy una prueba';
} );


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/products', 'ProductController@index'); //listado de productos LISTAR
Route::get('/admin/products/create', 'ProductController@create'); //Registar productos vista FORMULARIO
Route::post('/admin/products', 'ProductController@store'); //volver a leer la lista de productos REGISTRAR

Route::get('/admin/products/{id}/edit', 'ProductController@edit')->name('EditarRegistro');//Formulario de Edicion // EL NAME ES PARA laravel colective
Route::put('/admin/products/{id}', 'ProductController@update')->name('productos.update'); //Formulario Actualizar