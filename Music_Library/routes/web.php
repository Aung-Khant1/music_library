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

//Route::get('/', function () {
    //return view('welcome');
//});


//wanna route start
  Route::resource('singer', 'SingerController'); // 7 (get, post, put, delete)
  Route::resource('song', 'SongController'); // 7 
  //Route::resource('subcategory', 'SubcategoryController'); // 7 
  //Route::resource('item', 'ItemController'); // 7


 Route::get('/', 'FrontendController@home')->name('mainpage');


  
//wanna route end

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
