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

Route::get('/home', function () {
    return view('main.index');
})->name('home');

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');

Route::get('/donate', function () {
    return view('main.donate');
})->name('donate');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/lnstitut', function () {
    return view('Llnstitut.index');
})->name('lnstitut');
Route::get('/rayonnement', function () {
    return view('Rayonnement.index');
})->name('rayonnement');

Route::get('/products', function () {
    return view('products.index');
})->name('products');
