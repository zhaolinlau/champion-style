<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:staff'])->group(function () {
	Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
	Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
	Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
	Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
	Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
