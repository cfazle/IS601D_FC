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

Route::get('/', 'HomeController@home')->name('index');


Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@store')->name('contact.store');
Route::get('/thanks/{name}', 'HomeController@thanks')->name('thanks');

/*Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


