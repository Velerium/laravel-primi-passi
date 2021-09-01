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
    return view('home',
        [
            'status' => 'COOL!',
            'framework' => 'Laravel',
            'welcomePage' => '/welcome',
            'infoLink' => '/about'
        ]
    );
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboutMe',
        [
            'name' => 'Andrea',
            'job' => 'Full-stack Dev',
        ]
    );
});