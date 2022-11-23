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

Route::get('/', function() {
    return view('welcome');
});
// ---------------------- @ My code:
Route::get('/encuentro', function() {
    return view('encuentro');
});
Route::get('/contacto', function() {
    return view('contacto');
});
Route::get('/things', function() {
    return view('things');
});
