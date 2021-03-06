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


Route::group(['middleware'=>'auth'],function(){
    Route::get('/pertanyaan', 'PertanyaanController@index'); //nyoba list section
    Route::get('/pertanyaan/create', 'PertanyaanController@create');
    Route::post('/pertanyaan', 'PertanyaanController@store'); 
    Route::get('/pertanyaan/{id}','PertanyaanController@show');
    Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
    Route::put('/pertanyaan/{id}','PertanyaanController@update');
    route::get('/pertanyaan/{id}/jawab','JawabanController@create');
    Route::post('/pertanyaan/{id}/jawab/success','JawabanController@store');
    Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/temp',function(){
        return view('final_project.temp');
    });
 
    
});

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

Auth::routes();

//Route Coba-Coba nanti bakal dihapus
route::get('/pertanyaan/komentar/{user_id}/{pertanyaan_id}', 'KomentarController@show_pertanyaan_komentar');
route::get('/jawaban/komentar/{user_id}/{jawaban_id}', 'KomentarController@show_jawaban_komentar');
route::post('/pertanyaan/komentar/create', 'KomentarController@store');
route::post('/jawaban/komentar/create', 'KomentarController@store');