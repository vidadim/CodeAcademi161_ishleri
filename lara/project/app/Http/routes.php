<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ilktest', function(){
  return "Salam laravel";
});

Route::get('ilkview',function(){
  return view('buview');
});

Route::get('persons','PagesController@persons');

Route::get('upload', function() {
  return View::make('pages.upload');
});
Route::post('apply/upload', 'ApplyController@upload');


Route::get('yukle', function() {
  return View::make('pages.yukle');
});
Route::get('imageUpload', 'CustomController@add');

Route::post('imageSave', 'CustomController@store');


Route::get('chart',function(){
  return view('chart');
});