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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');


    Route::group(['prefix' => 'residence'], function(){
      Route::get('/index', [App\Http\Controllers\ResidenceController::class, 'index'])->name('residence.index');
      Route::get('/create', [App\Http\Controllers\ResidenceController::class, 'create'])->name('residence.create');
      Route::post('/store', [App\Http\Controllers\ResidenceController::class, 'store'])->name('residence.store');
      Route::get('/show/{id}', [App\Http\Controllers\ResidenceController::class, 'show'])->name('residence.show');
      Route::delete('/delete/{id}', [App\Http\Controllers\ResidenceController::class, 'destroy'])->name('residence.delete');
    });

    Route::group(['prefix' => 'brgy_clearance'], function(){
      Route::get('/index', [App\Http\Controllers\BarangayClearanceController::class, 'index'])->name('brgy_clearance.index');
      Route::get('/create/{id}', [App\Http\Controllers\BarangayClearanceController::class, 'create'])->name('brgy_clearance.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayClearanceController::class, 'show'])->name('brgy_clearance.show');
    });

    Route::group(['prefix' => 'brgy_indigency'], function(){
      Route::get('/create/{id}', [App\Http\Controllers\BarangayIndigencyController::class, 'create'])->name('brgy_indigency.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayIndigencyController::class, 'show'])->name('brgy_indigency.show');
    });

    Route::group(['prefix' => 'brgy_residency'], function(){
      Route::get('/create/{id}', [App\Http\Controllers\BarangayResidencyController::class, 'create'])->name('brgy_residency.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayResidencyController::class, 'show'])->name('brgy_residency.show');
    });

    Route::group(['prefix' => 'brgy_goodmoral'], function(){
      Route::get('/create/{id}', [App\Http\Controllers\BarangayGoodmoralController::class, 'create'])->name('brgy_goodmoral.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayGoodmoralController::class, 'show'])->name('brgy_goodmoral.show');
    });

    Route::group(['prefix' => 'brgy_PUI-PUM'], function(){
      Route::get('/create/{id}', [App\Http\Controllers\BarangayPUIPUMController::class, 'create'])->name('brgy_puipum.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayPUIPUMController::class, 'show'])->name('brgy_puipum.show');
    });

    Route::group(['prefix' => 'brgy_live-in'], function(){
      Route::get('/create/{id}', [App\Http\Controllers\BarangayLiveinController::class, 'create'])->name('brgy_live-in.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayLiveinController::class, 'show'])->name('brgy_live-in.show');
    });

    Route::group(['prefix' => 'brgy_income'], function(){
      Route::get('/create/{id}', [App\Http\Controllers\BarangayIncomeController::class, 'create'])->name('brgy_income.create');
      Route::post('/show/{id}', [App\Http\Controllers\BarangayIncomeController::class, 'show'])->name('brgy_income.show');
    });

    

    Route::group(['prefix' => 'business_clearance'], function(){
      Route::get('/index', [App\Http\Controllers\BusinessClearanceController::class, 'index'])->name('business_clearance.index');
      Route::get('/create-business', [App\Http\Controllers\BusinessClearanceController::class, 'create_business'])->name('create_business');
      Route::post('/store', [App\Http\Controllers\BusinessClearanceController::class, 'store_business'])->name('store_business');
      Route::get('/show/{id}', [App\Http\Controllers\BusinessClearanceController::class, 'show'])->name('business_clearance.show');
    });

    //Blotters
    Route::group(['prefix' => 'Blotters'], function(){
      Route::get('/index', [App\Http\Controllers\BlottersController::class, 'index'])->name('blotters.index');
      Route::get('/create', [App\Http\Controllers\BlottersController::class, 'create'])->name('blotters.create');
      Route::post('/store', [App\Http\Controllers\BlottersController::class, 'store'])->name('blotters.store');
      Route::get('/show/{id}', [App\Http\Controllers\BlottersController::class, 'show'])->name('blotters.show');
      Route::get('/settelement-agreement/{id}', [App\Http\Controllers\BlottersController::class, 'settelement'])->name('blotters.settelement');
      Route::put('/settelement-agreement/save/{id}', [App\Http\Controllers\BlottersController::class, 'settelement_save'])->name('blotters.settelement_save');
      
      // Route::delete('/delete/{id}', [App\Http\Controllers\ResidenceController::class, 'destroy'])->name('residence.delete');
    });

    Route::get('/permits', function () {
      return view('brgy_permit.index');
    })->name('certificate');

    //officials
    Route::group(['prefix' => 'officials'], function(){
      Route::get('/index', [App\Http\Controllers\OfficialsController::class, 'index'])->name('officials.index');
      Route::get('/edit', [App\Http\Controllers\OfficialsController::class, 'edit'])->name('officials.edit');
      Route::put('/update/{id1}/{id2}/{id3}/{id4}/{id5}/{id6}/{id7}/{id8}/{id9}/{id10}/{id11}/{id12}', [App\Http\Controllers\OfficialsController::class, 'update'])->name('officials.update');
      
      // Route::get('/create', [App\Http\Controllers\BlottersController::class, 'create'])->name('blotters.create');
      // Route::post('/store', [App\Http\Controllers\BlottersController::class, 'store'])->name('blotters.store');
      // Route::get('/show/{id}', [App\Http\Controllers\ResidenceController::class, 'show'])->name('residence.show');
      // Route::delete('/delete/{id}', [App\Http\Controllers\ResidenceController::class, 'destroy'])->name('residence.delete');
    });


    Route::get('try', [App\Http\Controllers\BarangayClearanceController::class, 'try']);

Auth::routes();
