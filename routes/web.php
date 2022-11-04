<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminAmenityController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;


// Front
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');


// Admin
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');

Route::get('/admin/page/cart', [AdminPageController::class, 'cart'])->name('admin_page_cart');
Route::post('/admin/page/cart/update', [AdminPageController::class, 'cart_update'])->name('admin_page_cart_update');

Route::get('/admin/page/checkout', [AdminPageController::class, 'checkout'])->name('admin_page_checkout');
Route::post('/admin/page/checkout/update', [AdminPageController::class, 'checkout_update'])->name('admin_page_checkout_update');

Route::get('/admin/page/payment', [AdminPageController::class, 'payment'])->name('admin_page_payment');
Route::post('/admin/page/payment/update', [AdminPageController::class, 'payment_update'])->name('admin_page_payment_update');

// Admin Hotel Section
Route::get('/admin/amenity/view', [AdminAmenityController::class, 'index'])->name('admin_amenity_view');
Route::get('/admin/amenity/add', [AdminAmenityController::class, 'add'])->name('admin_amenity_add');
Route::post('/admin/amenity/store', [AdminAmenityController::class, 'store'])->name('admin_amenity_store');
Route::get('/admin/amenity/edit/{id}', [AdminAmenityController::class, 'edit'])->name('admin_amenity_edit');
Route::post('/admin/amenity/update/{id}', [AdminAmenityController::class, 'update'])->name('admin_amenity_update');
Route::get('/admin/amenity/delete/{id}', [AdminAmenityController::class, 'delete'])->name('admin_amenity_delete');
