<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\yajraController;
use Illuminate\Support\Facades\Route;


Route::get('/',[productController::class, 'index'])->name('products');

// Route::view('/user','user');

Route::get('/yajra',[yajraController::class,'index']);
Route::get('/yajra/data',[yajraController::class,'getData'])->name('yajra.data');
