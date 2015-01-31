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
	return View::make('home.index',array('title' => 'Home | HEFA'));
});


// Route::get('upload',function(){
//   $title = "Import file to database";
//     return View::make('upload')
//       ->with('title',$title);
// });

Route::resource('upload', 'ExcelUploadController');

Route::get('about',function(){
    return View::make('home.about',array('title' => 'About | HEFA'));
});

Route::get('contact',function(){
    return View::make('home.contact',array('title' => 'Contact | HEFA'));
});

Route::resource('search', 'SearchController');

Route::get('calculation', function(){
  return View::make('main.analysis',array('title' => 'Caculation | HEFA'));
});

Route::get('visualization', function(){
  return View::make('main.visualization',array('title' => 'Visualization | HEFA'));
});

Route::get('login',function(){
  $title = "Login";
  return View::make('user.login',array('title' => 'Login | HEFA'));
});

Route::get('delete-{table}', function($table) {

});

// Route::resource('upload', 'ExcelUploadController');
