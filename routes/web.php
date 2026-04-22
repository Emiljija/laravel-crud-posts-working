<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Models\Car;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('index');
Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::post('posts', [PostController::class, 'store'])->name('store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('edit');
Route::put('posts/{post}/update', [PostController::class, 'update'])->name('update');
Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('destroy');
Route::get('posts/{post}', [PostController::class, 'show'])->name('show');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('about', function() { return view('about'); })->name('about');

Route::get('colors', function() {
    $colors = ['red', 'blue', 'green', 'yellow'];
    return view('colors', ['colors' => $colors]);
    })->name('colors');

Route::put('posts/{post}/update/status', [PostController::class, 'updateStatus'])->name('update.status');
Route::get('posts/{post}/status', [PostController::class, 'status'])->name('status');

Route::get('display-car', function() {
    return view('cars.show', ["cars" => Car::create("Toyota", "1998", 120000)]);
});