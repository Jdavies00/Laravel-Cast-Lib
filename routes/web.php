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
|notes

views are stored in routes 
routes can return in json aswell
Route::get('/', function () {
  
    return ['foo' => 'bar'];
});
user makes request 
*/

Route::get('/test', function () {
    //request helperfunction
    //('name') is the key
    $name = request('name');
    //return $name;

    // return view('test');
});

