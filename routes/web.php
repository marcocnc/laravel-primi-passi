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

Route::get('/', function(){
    $name = 'Marco';
    $lastname = 'Cancelliere';

    $users = [
        'Andrea Convertini',
        'Raffaele Catalano',
        'Marco Mazzilli',
        'Cosimo Tramonte'
    ];

    return view('home', compact('name', 'lastname', 'users'));
})->name('home');

Route::get('/about-us', function(){
    return view('about');
})->name('about');
