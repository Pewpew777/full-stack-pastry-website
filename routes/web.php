<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;
use App\Http\Controllers\customerController;
use App\Models\customer;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get("/",[productController::class,'showProducts']);
Route::get("/showProduct/{id}",[productController::class,'showProduct'])->name('showProduct');
Route::post('/cart/add', [orderController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/submit', [orderController::class, 'submit'])->name('cart.submitorder');
Route::get('/cart', [orderController::class, 'viewCart'])->name('cart.view');
Route::get('/cart/submit/success',[orderController::class,'success'])->name('orders.success');
Route::post('/cart/clear', [orderController::class, 'clearCart'])->name('cart.clear');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('modifications', [productController::class, 'modify'])->name('modify');
    Route::post('modification',[productController::class,'storeproduct'])->name('products.store');
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard',[customerController::class,'dash'])->name('dashboard');
        Route::get('dashboard/customers/{id}', [customerController::class, 'showCustomerOrders'])->name('customer.orders');
        Route::patch('dashboard/customers/{id}',[customerController::class,'customerstatustoggle'])->name('customerstatus.toggle');
        Route::patch('dashboard/modifications/{product}',[productController::class,'repture'])->name('repture');
        Route::delete('dashboard/modifications/{product}',[productController::class,'deleteproduct'])->name('deleteproduct');
        Route::delete('dashboard/customers/{id}', [customerController::class, 'deleteCustomer'])->name('customer.delete');
        // Add product, view orders, etc.
        // Route::resource('products', ProductController::class);
    });
});

