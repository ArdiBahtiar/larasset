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

Route::get('/', 'App\Http\Controllers\AssetController@index');

Route::post('/assets', 'App\Http\Controllers\AssetController@store');
Route::get('/assets/create', 'App\Http\Controllers\AssetController@create');
Route::put('/assets/{asset}', 'App\Http\Controllers\AssetController@update');
Route::get('/assets/{asset}/edit', 'App\Http\Controllers\AssetController@edit');
Route::get('/assets/{asset}/delete', 'App\Http\Controllers\AssetController@delete');


Route::get('/users', 'App\Http\Controllers\UserController@index');
// Route::post('/users', 'App\Http\Controllers\UserController@store');
// Route::get('/users/create', 'App\Http\Controllers\UserController@create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
