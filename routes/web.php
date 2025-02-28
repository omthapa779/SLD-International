<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\pagescontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact-form', [ContactController::class, 'submit']);
Route::get('/about', [pagescontroller::class, 'about']);
Route::get('/countries', [pagescontroller::class, 'countries']);
Route::get('/services', [pagescontroller::class, 'services']);
Route::get('/contact', [pagescontroller::class, 'contact']);