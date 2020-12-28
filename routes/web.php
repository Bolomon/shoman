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

    if(Auth::check()){
      // return redirect()->action('HomeController@main');
      return redirect('/main');

    }else {
      return view('main');
    }
});

Auth::routes();

Route::get('/main', 'HomeController@main');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rates', 'RatesController@index');
Route::post('/add_rates', 'RatesController@create')->name('add_rates');
Route::get('/profile', 'HomeController@profile');
// Route::post('/edit_profile', 'HomeController@edit_profile');
Route::get('/del_profile', 'HomeController@del_profile');
Route::get('/lol', 'HomeController@lol');
