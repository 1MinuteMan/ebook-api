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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function(){
    return "Halo";
});

Route::get('coba', function(){
    return['petra', 'mus', 'izumi'];
});

Route::get('coba2', function(){
    return[
        'nama' =>'ari',
        'kelas' => 'XII RPL 5',
        'NIS' => 3103120144
    ];
});

Route::get('coba3', function(){
    return response()->json(
        [
            'nama' => 'ari',
            'kelas' => 'XII RPL 5',
            'NIS' => 3103120144
        ],201
    );
});