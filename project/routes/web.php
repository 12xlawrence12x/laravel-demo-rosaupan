<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\GalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hehe', function () {
//     return view('lawrence');
// });


Route::get('/', function () {
    return view('welcome');
});






Route::get('/welcomes', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::get('/calculator', [CalculatorController::class,'showCalculatorPage']); 




// route sa dashboard
Route::get('/index', function () {
    return view('mypages.index');
})->name('index');

Route::get('/gallery', function () {
    return view('mypages.gallery');
})->name('gallery');

Route::get('/services', function () {
    return view('mypages.services');
})->name('services');























Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
