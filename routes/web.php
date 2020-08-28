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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/test', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

# comment as a message by @github.com/mahabubdev
// if you want to make frontend with Vue SPA(single-page-app) then you need to
// access all/every routes with your Vue-router. Just like you did it below
// So, you don't need to do more routes up there from php/laravel app as backend-app
// static files or storage should have defined way to GET request or Download(for supporting as RESTful API service)

Route::get('/{vue_capture?}',function () {
  return view('index');
})->where('vue_capture','[\/\w\.-]*');
