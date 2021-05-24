<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth', 'isAdmin'])-> prefix('admin') ->group(function () {
    Route::get('deneme', function () {
        return "demeöe";
    });
});