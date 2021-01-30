<?php

use App\Http\Controllers\FilmsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [FilmsController::class, 'show']);

Route::get('/page/{num}', [FilmsController::class, 'show_by_page']);

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/categories/{category}', [FilmsController::class, 'sort']);


Route::get('/new', [FilmsController::class, 'new']);


Route::get('/film/{id}', [FilmsController::class, 'show_film']);

Route::get('/search', [FilmsController::class, 'search']);

Route::post('/fetch', [FilmsController::class, 'fetch'])->name('autocomplete.fetch');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
