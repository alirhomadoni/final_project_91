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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route Coba-Coba nanti bakal dihapus
Route::get('/list', function(){
    return view('final_project.list');
}); //nyoba list section

Route::get('/form', function(){
    return view('final_project.form');
});

Route::get('/edit', function(){
    return view('final_project.edit');
});
