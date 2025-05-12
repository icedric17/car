<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

use App\Http\Controllers\CarController;

Route::resource('cars', CarController::class);
    ->only(['index', 'store', 'edit', 'create', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('/cars', CarController::class)
    ->only(['index', 'store', 'edit', 'update', 'create', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('/rent', RentController::class)
    ->only(['index', 'store', 'edit', 'update', 'create', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/rent/list', [RentController::class, 'rentList'])
    ->name('rent.list')
    ->middleware(['auth', 'verified']);

Route::resource('/payments', PaymentController::class)
    ->only(['index', 'store', 'edit', 'update', 'create', 'destroy'])
    ->middleware(['auth', 'verified']); 

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
Route::put('/payments/{payment}', [PaymentController::class, 'update'])->name('payments.update');

Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');

Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');

Route::post('/cars/{id}/return/{status}', [CarController::class, 'returnAction'])->name('cars.returnAction');

Route::delete('/rent/{rent}', [RentController::class, 'destroy'])->name('rent.destroy');


