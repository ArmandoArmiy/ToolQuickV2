<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Transaction_DetailsController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/category', CategoryController::class)->middleware(['verified']);
    Route::resource('/partners', PartnersController::class)->middleware(['verified']);
    Route::resource('/transaction', TransactionController::class)->middleware(['verified']);
    Route::resource('/product', ProductController::class)->middleware(['verified']);
    Route::resource('/details', Transaction_DetailsController::class)->middleware(['verified']);

    Route::get('/pdf_category', [CategoryController::class, 'pdf'])->name('pdf_category');
    Route::get('/pdf_partners', [PartnersController::class, 'pdf'])->name('pdf_partners');
    Route::get('/pdf_product', [ProductController::class, 'pdf'])->name('pdf_product');
    Route::get('/pdf_details', [Transaction_DetailsController::class, 'pdf'])->name('pdf_details');
    Route::get('/pdf_transaction', [TransactionController::class, 'pdf'])->name('pdf_transaction');


});

require __DIR__.'/auth.php';


