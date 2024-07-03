<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);    
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){ 
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/admin/superadmin', [AdminController::class, 'superadmin'])->middleware('userAkses:superadmin');
    Route::get('/admin/it', [AdminController::class, 'it'])->middleware('userAkses:it');
    Route::get('/logout', [SesiController::class, 'logout']);
});

