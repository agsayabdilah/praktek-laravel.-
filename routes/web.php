<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApexChartController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\ProductsGridController;

// Landing
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/movie', [MovieController::class, 'index'])->name('movie.index');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/datatable', [DatatableController::class, 'index'])->name('datatable');
    Route::get('/products-grid', [ProductsGridController::class, 'index'])->name('products-grid');
    Route::get('/apex-chart', [ApexChartController::class, 'index'])->name('apex-chart');
});