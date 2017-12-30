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
    return view('welcome');
});

// Route::get('/material', 'MaterialController@index');

function hash_material(string $name, string $salt = '')
{
    $hash = sha1($name.$salt);

    $hex = '#'.substr($hash, 0, 6);

    list($r, $g, $b) = sscanf($hex, '#%02x%02x%02x');

    $rgb = [$r, $g, $b];

    $hsv = array_map('round', rgbToHsv($r, $g, $b));

    return [
        'name' => $name,
        'hex' => $hex,
        'rgb' => $rgb,
        'hsv' => $hsv,
    ];
}

// Route::get('/material/{material}', 'MaterialController@show');

Route::resource('/material', 'MaterialController');
