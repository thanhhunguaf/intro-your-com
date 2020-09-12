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
    return view('index');
});

Route::prefix('thietkenoithat')->group(function () {
    Route::get('', function () {
        return view('thietkenoithat.thietkenoithat');
    });

    Route::get('/hado', function () {
        return view('thietkenoithat.hado');
    });

    Route::get('/fidecothaodien', function () {
        return view('thietkenoithat.fidecothaodien');
    });
});

Route::prefix('thicongnoithat')->group(function () {
    Route::get('', function () {
        return view('thicongnoithat.thicongnoithat');
    });

    Route::get('/hado', function () {
        return view('thicongnoithat.hado');
    });
});
