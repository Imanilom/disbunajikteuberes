<?php

use App\Models\Item;
use App\Models\Post;
use App\Models\Varietas;
use App\Models\Komoditas;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\VarietasController;
use App\Http\Controllers\PostController;
// Nama dibawah Navbar
Route::get('/', function () {
    return view('home', ['title'=>'Komoditas']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About']);
});



Route::get('/komoditas', [KomoditasController::class, 'index']);
Route::get('/komoditas/{id}', [KomoditasController::class, 'show'])->name('komoditas.show');

Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
Route::get('/varietas/{id}', [VarietasController::class, 'show'])->name('varietas.show');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact']);
});

