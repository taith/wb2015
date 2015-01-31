<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
  $title = "Wellcome to the website";
	return View::make('home.index')
    ->with('title',$title);
});


// Route::get('upload',function(){
//   $title = "Import file to database";
//     return View::make('upload')
//       ->with('title',$title);
// });

Route::resource('upload', 'ExcelUploadController');

Route::get('about',function(){
  $title = "About us";
    return View::make('home.about')
      ->with('title',$title);
});

Route::resource('search', 'SearchController');

Route::get('calculation', function(){
  $title = "Analysis data";
  return View::make('main.analysis')
    ->with('title',$title);
});

Route::get('visualization', function(){
  $title = "Analysis data";
  return View::make('main.visualization')
    ->with('title',$title);
});

Route::get('login',function(){
  $title = "Login";
  return View::make('user.login')
    ->with('title',$title);
});

Route::get('delete-{table}', function($table) {

});

// Route::resource('upload', 'ExcelUploadController');
