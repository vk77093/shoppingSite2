<?php

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
Route::get('/main',function(){
  return view('index');
});
Route::get('/about',function(){
  return view('about');
})->name('myabout');
Route::get('/checkout',function(){
  return view('checkout');
});
Route::get('/contact',function(){
  return view('contact');
});
Route::get('/faqs',function(){
  return view('faqs');
});
Route::get('/help',function(){
  return view('help');
});
Route::get('/payments',function(){
  return view('payments');
});
