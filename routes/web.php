<?php

use App\Http\Controllers\myNew;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Using Controller
// Route::get('/',[myNew::class,'home'])->name('home');

// Using Middleware
Route::get('/',[myNew::class,'home'])->name('home')->middleware('working:admin');

// Route::get('/services', function () {
//     return view('data1');
// })->name('service');

// Using Controller
Route::get('/services',[myNew::class,'service'])->name('service')->middleware('working
');

// Route::get('/contact-us', function () {
//     return view('data2');
// })->name('contact');

// Using Controller
Route::get('/contact-us',[myNew::class,'contact'])->name('contact');

// Route::get('/about-us', function () {
//     return view('data3');
// })->name('about');

// Using Controller
Route::get('/about-us',[myNew::class,'about'])->name('about');



// Route::middleware(['working']->group(function()){

// });