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

// Route::get('/contact', function(){
//     return view('contact');
// });

Route::view('/contact', 'contact', ['name' => 'Edi 1', 'phone' => '0889789237']);

// Route::redirect('/contact', '/welcome-us');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});