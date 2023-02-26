<?php

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

Route::get('/', function () {
    return "<h1>Selamat Datang<h1>";
});

Route::get('/about', function () {
    return "<h1>Nama : Muhamad Syaroful Anam <br> NIM : 2141720108</h1>";
});

Route::get('/articles/{id}', function ($id) {
    return "<h1>Halaman Article dengan ID : $id</h1>";
});
