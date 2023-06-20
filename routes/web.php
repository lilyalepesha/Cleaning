<?php

use App\Http\Controllers\AdminSearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/order', function (){
   return view('layouts.order');
});

Route::get('/calculation', function (){
    return view('layouts.calculation');
});

Route::get('/connection', function (){
    return view('layouts.connection');
});

Route::prefix('register')->as('register.')->group(function (){
   Route::post('store', [RegisterController::class, 'store'])->name('store');
});


Route::middleware(['auth'])->prefix('admin')->as('admin.')->group(function (){
    Route::get('index', [AdminController::class, 'index'])->name('index')
        ->can('isAdmin');
});
