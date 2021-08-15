<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');


    
    Route::get('residence/index', [App\Http\Controllers\ResidenceController::class, 'index'])->name('residence.index');
    Route::get('residence/create', [App\Http\Controllers\ResidenceController::class, 'create'])->name('residence.create');
    Route::post('residence/store', [App\Http\Controllers\ResidenceController::class, 'store'])->name('residence.store');
    Route::get('residence/show/{id}', [App\Http\Controllers\ResidenceController::class, 'show'])->name('residence.show');
    Route::delete('residence/delete/{id}', [App\Http\Controllers\ResidenceController::class, 'destroy'])->name('residence.delete');

    
    Route::get('brgy_clearance/index', [App\Http\Controllers\BarangayClearanceController::class, 'index'])->name('brgy_clearance.index');
    Route::get('brgy_clearance/create/{id}', [App\Http\Controllers\BarangayClearanceController::class, 'create'])->name('brgy_clearance.create');
    Route::post('brgy_clearance/show/{id}', [App\Http\Controllers\BarangayClearanceController::class, 'show'])->name('brgy_clearance.show');

    Route::get('try', [App\Http\Controllers\BarangayClearanceController::class, 'try']);



    Route::get('/certificate', function () {
      return view('brgy_certificate.index');
    })->name('certificate');



Auth::routes();
