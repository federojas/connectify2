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
    return view("home");
});

Route::get('/about', function () {
    return view("About");
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get("/usuario/profile", "UsuarioController@profile");

Route::get("/proyecto/post", "ProyectoController@post");
Route::post("/proyecto/post", "ProyectoController@store");

Route::get("/proyecto/join", "ProyectoController@join");

Route::post("/proyecto/joinproject", "ProyectoController@joinproject");

Route::get("/proyecto/api", "ProyectoController@api");
