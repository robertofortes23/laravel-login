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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos', 'ProdutosControlador@index'); // 1)

//Route::get('/produtos', 'ProdutosControlador@index')->name('produtos')->middleware('auth'); // 2)

Route::get('/departamentos', 'DepartamentosControlador@index'); // 5)


Route::get('/usuario', function() {
    return view('usuario');
}); // 6)
