<?php

use App\Http\Controllers\Backend\ContactController as BackendContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'postContact'])->name('postContact');
Route::get('/course', [HomeController::class, 'course'])->name('courses');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');




Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contactapplication', [BackendContactController::class, 'index'])->middleware(['auth', 'verified'])->name('contactapplication');
Route::get('/contactapplication/{id}', [BackendContactController::class, 'show'])->middleware(['auth', 'verified'])->name('contactapplication-id');






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
