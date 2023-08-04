<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrscController;
use App\Http\Controllers\ImmigrationController;
use App\Http\Controllers\InecController;
use App\Http\Controllers\NimcController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/agency', function () {
     return view('cover');
 });


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('access', [DashboardController::class, 'display']);
});



Route::middleware('auth')->group(function () {

    Route::get('frsc', [FrscController::class, 'index']);
    Route::get('frsc-edit/{id}', [FrscController::class, 'edit']);
    Route::put('frsc-update/{id}', [FrscController::class, 'update']);
    Route::get('frsc-delete/{id}', [FrscController::class, 'destroy']);

    Route::get('immigration', [ImmigrationController::class, 'index']);
    Route::get('immigration-edit/{id}', [ImmigrationController::class, 'edit']);
    Route::put('immigration-update/{id}', [ImmigrationController::class, 'update']);
    Route::get('immigration-delete/{id}', [ImmigrationController::class, 'destroy']);
    
    Route::get('inec', [InecController::class, 'index']);
    Route::get('inec-edit/{id}', [InecController::class, 'edit']);
    Route::put('inec-update/{id}', [InecController::class, 'update']);
    Route::get('inec-delete/{id}', [InecController::class, 'destroy']);

    Route::get('nimc', [NimcController::class, 'index']);
    Route::get('nimc-edit/{id}', [NimcController::class, 'edit']);
    Route::put('nimc-update/{id}', [NimcController::class, 'update']);
    Route::get('nimc-delete/{id}', [NimcController::class, 'destroy']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    Route::get('agency/frsc', [FrscController::class, 'create']);
    Route::post('frsc/store', [FrscController::class, 'store']);
    
    Route::get('agency/immigration', [ImmigrationController::class, 'create']);
    Route::post('immigration-store', [ImmigrationController::class, 'store']);
    
    Route::get('agency/inec', [InecController::class, 'create']);
    Route::post('inec-store', [InecController::class, 'store']);
    
    Route::get('agency/nimc', [NimcController::class, 'create']);
    Route::post('nimc-store', [NimcController::class, 'store']);


require __DIR__.'/auth.php';
