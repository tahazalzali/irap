<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;
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

Route::get('/home',function(){
return view('HOME.index');
})->name('home');
Route::get('/home/related',function(){
return view('HOME.related');
})->name('home.related');


Route::get('/quisommes', function () {
    return view('main.index');
})->name('quisommes');



Route::resource('/donate','DonationController')->name('donate','donate');

Route::resource('/contact','ContactController')->name('contact','contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/lnstitut', function () {
    return view('Llnstitut.index');
})->name('lnstitut');
Route::get('/lnstitut/related', function () {
    return view('Llnstitut.related');
})->name('lnstitut.related');
Route::get('/rayonnement', function () {
    return view('Rayonnement.index');
})->name('rayonnement');

Route::get('/products', function () {
    return view('products.index');
})->name('products');

Route::get('/product', function () {
    return view('products.product');
})->name('product');

Route::get('/aritsanat', function () {
    return view('products.artisanat');
})->name('products.artisanat');

Route::get('/education', function () {
    return view('Llnstitut.eductaion');
})->name('Llnstitut.eductaion');

