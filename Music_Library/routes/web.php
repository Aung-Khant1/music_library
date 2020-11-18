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
Route::get('/songs', 'FrontendController@song')->name('songs');
Route::post('/isongs', 'FrontendController@isongs')->name('isongs');
Route::post('/lsongs', 'FrontendController@lsongs')->name('lsongs');
Route::post('/ksongs', 'FrontendController@ksongs')->name('ksongs');
Route::post('/msongs', 'FrontendController@msongs')->name('msongs');
Route::post('/fsongs', 'FrontendController@fsongs')->name('fsongs');
Route::post('/asongs', 'FrontendController@asongs')->name('asongs');
// Route::resource('showsongs', 'SongsController');

 




Route::post('filterSongOfSinger','FrontendController@filterSongOfSinger')->name('filterSongOfSinger');
  

Route::get('contact','FrontendController@contact')->name('contact');

Route::get('SongsByOneSingerOnePage/{id}','FrontendController@SongsByOneSingerOnePage')->name('SongsByOneSingerOnePage');
///////////////////////////////


Route::get('AllClassMusicOnePage/{type}','FrontendController@AllClassMusicOnePage')->name('AllClassMusicOnePage');

Route::get('AllClassMusicOnePage2/{type}','FrontendController@AllClassMusicOnePage2')->name('AllClassMusicOnePage2');




///////////////////////////////////


//wanna route end
Route::resource('request_song', 'RequestSongController');
Route::resource('comments', 'CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');