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

Route::get('/', 'MaterialController@welcome');

Route::post('/material', 'MaterialController@store');
Route::get('/material/{any}', ['as' => 'material_show', 'uses' => 'MaterialController@show'])->where('any', '([a-zA-Z0-9\.\/\+\-]*)');
