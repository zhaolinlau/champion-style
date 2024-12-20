<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
	$data['ratings'] = DB::table('rating')
                            ->get();
	return view('welcome', $data);
});

Auth::routes();

// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/submitRating', [App\Http\Controllers\HomeController::class, 'submitRating'])->name('submitRating');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/shop', [ProductController::class, 'showCustomerShopPage'])->name('shop');
Route::post('/shop/favorite/{id}', [ProductController::class, 'addFavorite'])->name('addFavorite');
Route::delete('/shop/favorite/{id}', [ProductController::class, 'removeFavorite'])->name('removeFavorite');


// Booking Routes
//Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index'); // List all bookings
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create'); // Show booking form
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');


Route::middleware(['auth', 'role:staff'])->group(function () {
	Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
	Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
	Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
	Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
	Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
	Route::get('/staff/shop', [ProductController::class, 'showStaffShopPage'])->name('staff.shop');
	Route::post('/staff/shop', [ProductController::class, 'addProduct'])->name('staff.addProduct');
	Route::get('/staff/add-product', [ProductController::class, 'showAddProductPage'])->name('staff.addProductPage');
	Route::delete('/staff/product/{id}', [ProductController::class, 'deleteProduct'])->name('staff.deleteProduct');
	Route::patch('/staff/product/{id}/status', [ProductController::class, 'updateProductStatus'])->name('staff.updateProductStatus');
	

});

