<?php

use app\Http\Controllers\AssetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'App\Http\Controllers\AssetController@index')->middleware('auth');
Route::get('/', 'App\Http\Controllers\HomeController@index')->middleware('auth');

Route::get('/assets/index', 'App\Http\Controllers\AssetController@index')->middleware('auth');
Route::post('/assets', 'App\Http\Controllers\AssetController@store')->middleware('auth');
Route::get('/assets/create', 'App\Http\Controllers\AssetController@create')->middleware('auth');
Route::put('/assets/{asset}', 'App\Http\Controllers\AssetController@update')->middleware('auth');
Route::get('/assets/{asset}/edit', 'App\Http\Controllers\AssetController@edit')->middleware('auth');
Route::get('/assets/{asset}/delete', 'App\Http\Controllers\AssetController@delete')->middleware('auth');


Route::get('/users', 'App\Http\Controllers\UserController@index')->middleware('auth');
Route::get('/users/{id}/profile', 'App\Http\Controllers\UserController@profile')->middleware('auth');
// Route::post('/users', 'App\Http\Controllers\UserController@store');
// Route::get('/users/create', 'App\Http\Controllers\UserController@create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
